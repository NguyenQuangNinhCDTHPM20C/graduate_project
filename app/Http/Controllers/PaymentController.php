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
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal($request->input('total'));
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
            return redirect()->route('payment.status')->withErrors('Error processing PayPal payment.');
        }
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
                return view('Public.pages.payment.payment-status')->with('success', 'Payment successful.');
            } else {
                return view('Public.pages.payment.payment-status')->withErrors('Payment failed.');
            }
        } catch (\Exception $ex) {
            return view('Public.pages.payment.payment-status')->withErrors('Error processing PayPal payment.');
        }
    }
}