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
        $plan = $request->plan;
        $user = User::findOrFail(Auth::user()->id);
        switch ($plan) {
            case 1:
                $user->newSubscription('mountly', 'plan_DPZvs3n9UFAr2s')->create($request->stripeToken);        
                break;
            case 2:
                $user->newSubscription('threeMonths','plan_DPZyAWzNX2BHFk')->create($request->stripeToken);
                break;
            case 3:
                $user->newSubscription('midYear','plan_DPZzoSKKVSpteM')->create($request->stripeToken);
                break;
            default:
                #algo por defecto
                break;
        }
        if($user->suscrito())
            return redirect()->route('thanks');
        
        return redirect()->route('cashier')->with('mensaje','Ha ocurrido un error por favor intenta de nuevo o contacta al administrador');
    }
}
