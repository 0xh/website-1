<?php

namespace App\Providers;

use Laravel\Cashier\Cashier;
use Laravel\Spark\Spark;
use Laravel\Spark\Providers\AppServiceProvider as ServiceProvider;

class SparkServiceProvider extends ServiceProvider
{
    /**
     * Your application and company details.
     *
     * @var array
     */
    protected $details = [
        'vendor' => 'Agrisave International',
        'product' => 'Agricultural all-in-one Dashboard',
        'street' => 'PO Box 111',
        'location' => 'Your Town, NY 12345',
        'phone' => '555-555-5555',
    ];

    /**
     * The address where customer support e-mails should be sent.
     *
     * @var string
     */
    protected $sendSupportEmailsTo = 'chilu@agrisave.co';

    /**
     * All of the application developer e-mail addresses.
     *
     * @var array
     */
    protected $developers = [
        'michael.e.deck@outlook.com',
		'chilu@agrisave.co'
    ];

    /**
     * Indicates if the application will expose an API.
     *
     * @var bool
     */
    protected $usesApi = false;

    /**
     * Finish configuring Spark for the application.
     *
     * @return void
     */
    public function booted()
    {
    	Cashier::useCurrency('zmw', 'ZK');
        Spark::useStripe()->noCardUpFront()->trialDays(10);
        Spark::collectBillingAddress();

        Spark::freePlan('Lite')
            ->features([
				'Weather Information', "Crop's Growth Tracking"
            ]);

        Spark::plan('Starter', 'starter-monthly-zmw')
            ->price(19)
            ->features([
                'Weather Information', "Crop's Growth Tracking"
            ]);

//        Spark::plan('Grower Lite', 'grower-lite-monthly-zmw')
//            ->price(79)
//            ->features([
//                'First', 'Second', 'Third'
//            ]);

//        Spark::plan('Grower Pro', 'grower-pro-monthly-zmw')
//            ->price(179)
//            ->features([
//                'First', 'Second', 'Third'
//            ]);

        Spark::plan('Starter', 'starter-yearly-zmw')
            ->price(190)
			->yearly()
            ->features([
                'Weather Information', "Crop's Growth Tracking"
            ]);

//        Spark::plan('Grower Lite', 'grower-lite-yearly-zmw')
//            ->price(790)
//			->yearly()
//            ->features([
//                'First', 'Second', 'Third'
//            ]);

//        Spark::plan('Grower Pro', 'grower-pro-yearly-zmw')
//            ->price(1790)
//			->yearly()
//            ->features([
//                'First', 'Second', 'Third'
//            ]);

//        Spark::plan('Starter', 'starter-monthly-usd')
//            ->price(1.99)
//            ->features([
//                'First', 'Second', 'Third'
//            ]);
//
//        Spark::plan('Grower Lite', 'grower-lite-monthly-usd')
//            ->price(8.99)
//            ->features([
//                'First', 'Second', 'Third'
//            ]);
//
//        Spark::plan('Grower Pro', 'grower-pro-monthly-usd')
//            ->price(18.99)
//            ->features([
//                'First', 'Second', 'Third'
//            ]);
//
//        Spark::plan('Starter', 'starter-yearly-usd')
//            ->price(19.99)
//			->yearly()
//            ->features([
//                'First', 'Second', 'Third'
//            ]);
//
//        Spark::plan('Grower Lite', 'grower-lite-yearly-usd')
//            ->price(89.99)
//			->yearly()
//            ->features([
//                'First', 'Second', 'Third'
//            ]);
//
//        Spark::plan('Grower Pro', 'grower-pro-yearly-usd')
//            ->price(189.99)
//			->yearly()
//            ->features([
//                'First', 'Second', 'Third'
//            ]);
    }
}
