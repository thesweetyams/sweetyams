<?php
namespace Acme\Billing;
use Stipe;
use Stripe_charge;


class StripeBilling implements BillingInterface{

    public function __construct()
    {
        Stipe::setApiKey($_ENV['STRIPE_SECRET_KEY']);
    }

    public function charge(array $data)
    {
        try {
            return Stripe_charge::create([
                'amount' => 10 * 100,
                'currency' => 'usd',
                'description' => $data['email'],
                'card' => $data['stripeToken']
            ]);
        } catch (Stripe_CardError $e) {
            dd('card was declined');
        }
    }
}

 ?>
