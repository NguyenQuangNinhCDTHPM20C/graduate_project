<?php

namespace App\Http\Controllers;

use App\Exports\InvoicesExport;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Barryvdh\DomPDF\Facade\PDF;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('admin.pages.invoice.invoice-list',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $invoice = Invoice::where('code', $code)->first();
        $invoice_details = InvoiceDetail::where('invoice_id', $invoice->id)->get();
        $total = 0;
        foreach($invoice_details as $invoice_detail)
        {
            $total += $invoice_detail->quantity * $invoice_detail->price;
        }
        $discount_total =  abs($invoice->total - $total);
        return view('admin.pages.invoice.invoice-detail', compact('invoice', 'invoice_details', 'discount_total'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        $invoice = Invoice::where('code', $code)->first();
        $invoice_details = InvoiceDetail::where('invoice_id', $invoice->id)->get();
        $total = 0;
        foreach($invoice_details as $invoice_detail)
        {
            $total += $invoice_detail->quantity * $invoice_detail->price;
        }
        $discount_total = abs($invoice->total - $total);
        return view('admin.pages.invoice.invoice-edit', compact('invoice', 'invoice_details', 'discount_total'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoice = Invoice::findOrFail($id);
        if($invoice){
            $invoice->status = $request->input('status');
            $invoice->save();
            session()->put('success', 'Cập nhật trạng thái đơn hàng thành công!');
        }else{
            session()->put('error', 'Cập nhật trạng thái đơn hàng thất bại!');
        }
        return redirect()->route('invoice.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = Invoice::findOrFail($id);
        InvoiceDetail::where('invoice_id', $invoice->id)->delete();
        $invoice->delete();
        return redirect()->route('invoice.list')->with('Invoice has been deleted successfully');
    }
    
    public function export()
    {
        return Excel::download(new InvoicesExport, 'hoadonban.xlsx');
    }
    public function exportPDF($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice_details = InvoiceDetail::where('invoice_id', $invoice->id)->get();
        $total = 0;
        foreach($invoice_details as $invoice_detail)
        {
            $total += $invoice_detail->quantity * $invoice_detail->price;
        }
        $discount_total = abs($invoice->total - $total);
        $data = [
            'invoice' => $invoice,
            'invoice_details'=> $invoice_details,
            'discount_total'=>$discount_total
        ];

        $pdf = new Dompdf();
        $pdf = PDF::loadView('admin.pages.invoice.pdf', $data);

        return $pdf->stream('invoice'. $invoice -> code.'.pdf');
    }
}