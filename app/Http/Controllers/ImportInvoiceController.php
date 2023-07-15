<?php

namespace App\Http\Controllers;
use App\Models\ImportInvoice;
use App\Models\ImportInvoiceDetail;
use App\Models\Product;
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
        $invoices = ImportInvoice::get();
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
        $products = Product::get();
        return view('admin.pages.import_invoice.add-detail', compact('products'));
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
        // Lưu thông tin hóa đơn nhập
        $importInvoice = new ImportInvoice();
        $importInvoice->code = $request->input('code');
        $importInvoice->account_id = $request->input('account_id');
        $importInvoice->supplier = $request->input('supplier');
        // Tính tổng giá trị hóa đơn nhập
        $total = 0;
        $quantities = $request->input('quantity');
        $prices = $request->input('price');
        foreach ($quantities as $key => $quantity) {
            $total += $quantity * $prices[$key];
        }
        $importInvoice->total = $total;
        $importInvoice->status = $request->input('status');
        $importInvoice->created_at = $request->input('created_at');
        $importInvoice->updated_at = $request->input('updated_at');
        $importInvoice->save();

        // Lưu thông tin chi tiết hóa đơn nhập
        $productIds = $request->input('product_id');
        foreach ($productIds as $key => $productId) {
            $importInvoiceDetail = new ImportInvoiceDetail();
            $importInvoiceDetail->import_invoice_id = $importInvoice->id;
            $importInvoiceDetail->product_id = $productId;
            $importInvoiceDetail->quantity = $quantities[$key];
            $importInvoiceDetail->price = $prices[$key];
            $importInvoiceDetail->save();
        }

        return redirect()->route('import-invoice.list')->with('success', 'Hóa đơn nhập đã được tạo thành công.');
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
        $importInvoice = ImportInvoice::where('code', $code)->first();
        $importInvoiceDetail = ImportInvoiceDetail::where('import_invoice_id',  $importInvoice->id)->get();

        return view('Admin.pages.import_invoice.edit', compact('importInvoice', 'importInvoiceDetail'));
    }

    // Cập nhật hóa đơn mua hàng
    public function update(Request $request, $id)
    {
        $importInvoice = ImportInvoice::findOrFail($id);

        // Kiểm tra và cập nhật trạng thái hóa đơn
        if ($request->has('status')) {
            $status = $request->input('status');
            $importInvoice->status = $status;
            $importInvoice->save();
        }

        // Kiểm tra và cập nhật số lượng sản phẩm
        if ($request->has('quantity')) {
            $quantityData = $request->input('quantity');

            foreach ($quantityData as $productId => $quantity) {
                $importDetail = ImportInvoiceDetail::where('import_invoice_id', $importInvoice->id)
                    ->where('product_id', $productId)
                    ->first();

                if ($importDetail) {
                    $importDetail->quantity = $quantity;
                    $importDetail->save();
                }
            }
        }

        return redirect()->route('import-invoice.list')->with('success', 'Cập nhật hóa đơn thành công.');
    }
}