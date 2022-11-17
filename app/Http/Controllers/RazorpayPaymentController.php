<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;
  
class RazorpayPaymentController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {        
        return view('razorpayView');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $input = $request->all();
  
        $api = new Api(config('razor.key'), config('razor.secret'));
  
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
  
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
        
        // dd($response);

        $payment = \App\Models\Payment::find($response['description']);
        $payment->status = true;

        $application = \App\Models\Application::where('user_id', $payment->user_id)->where('app_no', $payment->app_no)->first();
        $application->status = true;

        if($payment->save() && $application->save())
            return redirect()->route('application.status');

        return redirect()->route('dashboard')->with('error', 'Whoops, Payment received! but something went wrong? Please contact tech. support');
        // Session::put('success', 'Payment successful');
        // return redirect()->back();
    }
}