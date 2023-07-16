<?php

namespace App\Http\Controllers;

use App\Exports\InvoicesExport;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Barryvdh\DomPDF\Facade\PDF;
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
        return view('admin.pages.invoice.invoice-edit', compact('invoice'));
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
        $invoice->status = $request->input('status');
        $invoice->save();
        return redirect()->route('invoice.list')->with('success', 'Invoice has been updated successfully');
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
    public function print($id)
    {
        $invoice = Invoice::findOrFail($id);

        $data = [
            'invoice' => $invoice,
        ];

        $pdf = PDF::loadView('invoices.print', $data);

        return $pdf->stream('invoice'. $invoice -> code.'pdf');
    }
}