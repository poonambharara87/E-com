<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;
// Import the class namespaces first, before using it directly
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {       
        $provider = new PayPalClient;
        // $config = [
        //     'mode'    => 'live',
        //     'live' => [
        //         'client_id'         => 'some-client-id',
        //         'client_secret'     => 'some-client-secret',
        //         'app_id'            => 'APP-80W284485P519543T',
        //     ],
        
        //     'payment_action' => 'Sale',
        //     'currency'       => 'USD',
        //     'notify_url'     => 'https://your-app.com/paypal/notify',
        //     'locale'         => 'en_US',
        //     'validate_ssl'   => true,
        // ];
        $guzzleClientOptions = [
            'verify' => false,
            // Add other Guzzle options as needed
        ];

        $guzzleClient = new GuzzleClient($guzzleClientOptions);

        $provider->setApiCredentials(config('paypal'));
        $paypal_token = $provider->getAccessToken();
 

        $response = $provider->createOrder([
            "intent" => "CAPTURE",

            "application_context" => [
               
                "return_url" => route('paypal_success'),
                "cancel_url" => route('paypal_cancel')
            ],
            "purchase_units" => [
                
                "amount"=> [
                  "currency_code"=> "USD",
                  "value"=> "100.00"
                 ]
              
          ],

        ]);
        dd($response);
    }

   
}
