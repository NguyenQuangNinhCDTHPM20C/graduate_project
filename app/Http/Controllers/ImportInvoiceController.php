<?php

namespace App\Http\Controllers;
use App\Models\ImportInvoice;
use App\Models\ImportInvoiceDetail;
use Illuminate\Http\Request;

class ImportInvoiceController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = ImportInvoice::all();
        return view('admin.pages.import_invoice.index',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.import_invoice.add');
    }

    public function create_detail()
    {
        return view('admin.pages.import_invoice.add-detail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice = new ImportInvoice;
        $invoice->code = $request->input('code');
        $invoice->account_id = $request->input('account_id');
        $invoice->phone_number = $request->input('phone_number');
        $invoice->total = $request->input('total');
        $invoice->save();
        return redirect()->route('import-invoice.list')->with('success', 'Invoice has been updated successfully');
    }

    public function store_detail(Request $request)
    {
            $invoice = new ImportInvoiceDetail;
            $invoice->import_invoice_id = $request->input('purcharse_invoice_id');
            $invoice->product_code= $request->input('product_code');
            $invoice->quantity = $request->input('quantity');
            $invoice->price = $request->input('price');
            $invoice->save();
        
        return redirect()->route('import-invoice.list')->with('success', 'Invoice has been updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImportInvoice  $invoice
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
        $invoice = ImportInvoice::where('code', $code)->first();
        return view('admin.pages.import_invoice.edit', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImportInvoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $invoice = ImportInvoice::findOrFail($id);
        $invoice->code = $request->input('code');
        $invoice->account_id = $request->input('account_id');
        $invoice->phone_number = $request->input('phone_number');
        $invoice->total = $request->input('total');
        $invoice->save();
        return redirect()->route('import-invoice.list')->with('success', 'Invoice has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invoice = ImportInvoice::findOrFail($id);
        ImportInvoiceDetail::where('import_invoice_id', $invoice->id)->delete();
        $invoice->delete();
        return redirect()->route('import-invoice.list')->with('Invoice has been deleted successfully');
    }
}