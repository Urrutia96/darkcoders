<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stripe\{Stripe, Charge, Customer};
use App\User;
use Auth;

class PaymentsController extends Controller
{
    public function __Constructor(){

    }

    public function store(Request $request){
        /*
            Stripe::setApiKey(config('services.stripe.secret'));

            $customer = Customer::create([
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ]);

            $charge = Charge::create([
                'customer' => $customer->id,
                'amount' => 3300,
                'currency' => 'pen'
            ]);
        */
        $user = User::findOrFail(Auth::user()->id);
        $user->newSubscription('mountly', 'plan_DPZvs3n9UFAr2s')->create($request->stripeToken);
        print($user->subscribed('mountly'));
    }
    public function threeMonths(Request $request){
        $user = User::findOrFail(Auth::user()->id);
        $user->newSubscription('threeMonths','plan_DPZyAWzNX2BHFk')->create($request->stripeToken);
    }
    public function midYearSubscription(Request $request){
        $user = User::findOrFail(Auth::user()->id);
        $user->newSubscription('midYear','plan_DPZzoSKKVSpteM')->create($request->stripeToken);
    }
}
