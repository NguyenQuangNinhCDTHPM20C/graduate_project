<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
use PayPal\Api\PaymentGateway;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;

class PaymentController extends Controller
{
    private $apiContext;

    public function __construct()
    {
        $paypalConfig = config('paypal');
        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $paypalConfig['client_id'],
                $paypalConfig['secret']
            )
        );
        $this->apiContext->setConfig($paypalConfig['settings']);
    }
    public function processPayment(Request $request)
    {
        if($request->input('payment_method') == 'paypal'){
        $request->session()->put('paymentRequest', $request->all());
        $request->session()->put('cart.items', \Cart::getContent());

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
    
        $amount = new Amount();
        $amount->setTotal($request->input('total')/23650);
        $amount->setCurrency('USD');
    
        $transaction = new Transaction();
        $transaction->setAmount($amount);
    
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('payment.status'))
            ->setCancelUrl(route('payment.status'));
    
        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions([$transaction])
            ->setRedirectUrls($redirectUrls);
    
        try {
            $payment->create($this->apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (\Exception $ex) {
            return redirect()->route('payment.status')->withErrors('Lỗi thanh toán Paypal.');
        }
    }else{
        $invoice = new Invoice;
                $invoice->code = Invoice::max('code') ? Invoice::max('code') + 1 : 1001;
                $invoice->account_id = $request->input('account_id');
                $invoice->order_date = Carbon::now();
                $invoice->name = $request->input('name');
                $invoice->address = $request->input('address').','.$request->input('district').','.$request->input('province');
                $invoice->phone = $request->input('phone_number');
                $invoice->email = $request->input('email');
                $invoice->notes = $request->input('notes');
                $invoice->total = $request->input('total');
                $invoice->payment_method = 'Ship COD';
                $invoice->save();
    
                $cartItems = \Cart::getContent();
                foreach ($cartItems as $cartItem) {
                    $invoice_detail = new InvoiceDetail;
                    $invoice_detail->invoice_id = $invoice->id;
                    $invoice_detail->product_id = $cartItem['id'];
                    $invoice_detail->quantity = $cartItem['quantity'];
                    $invoice_detail->price = $cartItem['price'];
                    $invoice_detail->save();
                }
                return redirect()->route('invoice', $invoice->code);    
    }
    return redirect()->route('checkout')->withErrors('Thanh toán thất bại.');
    }
    
    public function getPaymentStatus(Request $request)
    {
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
    
        if (empty($paymentId) || empty($payerId)) {
            return redirect()->route('payment.status')->withErrors('Payment failed.');
        }
    
        $payment = Payment::get($paymentId, $this->apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);
    
        try {
            $result = $payment->execute($execution, $this->apiContext);
            if ($result->getState() === 'approved') {
                // Lấy các giá trị request từ session
                $paymentRequest = $request->session()->get('paymentRequest');
    
                $invoice = new Invoice;
                $invoice->code = Invoice::max('code') ? Invoice::max('code') + 1 : 1001;
                $invoice->account_id = $paymentRequest['account_id'];
                $invoice->order_date = Carbon::now();
                $invoice->name = $paymentRequest['name'];
                $invoice->address = $paymentRequest['address'].','.$paymentRequest['district'].','.$paymentRequest['province'];
                $invoice->phone = $paymentRequest['phone_number'];
                $invoice->email = $paymentRequest['email'];
                $invoice->notes = $paymentRequest['notes'];
                $invoice->total = $paymentRequest['total'];
                $invoice->payment_method = 'Paypal';
                $invoice->save();
    
                $cartItems = $request->session()->get('cart.items');
                foreach ($cartItems as $cartItem) {
                    $invoice_detail = new InvoiceDetail;
                    $invoice_detail->invoice_id = $invoice->id;
                    $invoice_detail->product_id = $cartItem['id'];
                    $invoice_detail->quantity = $cartItem['quantity'];
                    $invoice_detail->price = $cartItem['price'];
                    $invoice_detail->save();
                }
    
                $request->session()->forget(['paymentRequest','cart.items']);
                \Cart::clear();
                session()->put('success', 'Thanh toán đơn hàng thành công');
                session()->save();                
                return redirect()->route('invoice', $invoice->code);
            } else {
                return redirect()->route('checkout')->withErrors('Payment failed.');
            }
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
            return view('public.pages.payment.payment-status')->withErrors('Error processing PayPal payment.');
        }
    }
    
    
}