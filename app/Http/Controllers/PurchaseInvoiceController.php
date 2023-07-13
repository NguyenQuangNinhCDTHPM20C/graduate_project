<?php

namespace App\Http\Controllers;
use App\Models\PurchaseInvoice;
use App\Models\PurchaseInvoiceDetail;
use Illuminate\Http\Request;

class PurchaseInvoiceController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = PurchaseInvoice::all();
        return view('admin.pages.purchase_invoice.index',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.purchase_invoice.add');
    }

    public function create_detail()
    {
        return view('admin.pages.purchase_invoice.add-detail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new PurchaseInvoice;
        $invoice->code = $request->input('code');
        $invoice->name = $request->input('name');
        $invoice->phone_number = $request->input('phone_number');
        $invoice->order_date = $request->input('order_date');
        $invoice->total = $request->input('total');
        $invoice->save();
        return redirect()->route('purchase-invoice.list')->with('success', 'Invoice has been updated successfully');
    }

    public function store_detail(Request $request)
    {
            $invoice = new PurchaseInvoiceDetail;
            $invoice->purchase_invoice_id = $request->input('purcharse_invoice_id');
            $invoice->product_code= $request->input('product_code');
            $invoice->quantity = $request->input('quantity');
            $invoice->order_date = $request->input('price');
            $invoice->price = $request->input('price');
            $invoice->save();
        
        return redirect()->route('purchase-invoice.list')->with('success', 'Invoice has been updated successfully');
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
        $invoice = PurchaseInvoice::where('code', $code)->first();
        return view('admin.pages.purchase_invoice.edit', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PurchaseInvoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoice = PurchaseInvoice::findOrFail($id);
        $invoice->code = $request->input('code');
        $invoice->name = $request->input('name');
        $invoice->phone_number = $request->input('phone_number');
        $invoice->order_date = $request->input('order_date');
        $invoice->total = $request->input('total');
        $invoice->save();
        return redirect()->route('purchase-invoice.list')->with('success', 'Invoice has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = PurchaseInvoice::findOrFail($id);
        PurchaseInvoiceDetail::where('purchase_invoice_id', $invoice->id)->delete();
        $invoice->delete();
        return redirect()->route('purchase-invoice.list')->with('Invoice has been deleted successfully');
    }
}