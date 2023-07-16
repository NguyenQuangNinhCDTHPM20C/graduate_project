<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        $discount_total = $invoice->total - $total;
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
        $discount_total = $invoice->total - $total;
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
}