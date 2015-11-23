<?php
/**
 * Created by PhpStorm.
 * User: jaspergeophrey
 * Date: 7/26/15
 * Time: 10:54 PM
 */

namespace TanSAO\Http\Composers;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use TanSAO\payment;


class paymentsViewComposer {

    public function compose( View $view){

        $payment = new Payment();

        $payments = $payment::with(['user'])->orderBy('created_at', 'dcs')->get();

        $paymentTotals = $this->includeTotalCosts($payments);

        $view->with('payments',$payments)
             ->with('paymentTotals',$paymentTotals);

    }

    /**
     *
     *
     * @return array
     */
    public function includeTotalCosts($payments){
        //Initialize All Costs
        $totalCost = ['usd'=>0, 'tsh'=>0, 'mpesa'=>0];
        $totalPaid = ['usd'=>0, 'tsh'=>0, 'mpesa'=>0];

        foreach($payments as $payment){
            if($payment->methodOfPayment == "USD"){
                $totalCost['usd'] = $totalCost['usd'] + $payment->cost;
                $totalPaid['usd'] = $totalPaid['usd'] + $payment->paid;
            }elseif($payment->methodOfPayment == "Tsh"){
                $totalCost['tsh'] = $totalCost['tsh'] + $payment->cost;
                $totalPaid['tsh'] = $totalPaid['tsh'] + $payment->paid;
            }else{
                $totalCost['mpesa'] = $totalCost['mpesa'] + $payment->cost;
                $totalPaid['mpesa'] = $totalPaid['mpesa'] + $payment->paid;
            }
        }

        return [$totalCost, $totalPaid];
    }
}