<?php

namespace App\Providers;

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
    protected $sendSupportEmailsTo = null;

    /**
     * All of the application developer e-mail addresses.
     *
     * @var array
     */
    protected $developers = [
        'michael.e.deck@outlook.com',
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
        Spark::useStripe()->noCardUpFront()->trialDays(10);
        Spark::collectBillingAddress();

        Spark::freePlan('Lite')
            ->features([
                'First', 'Second', 'Third'
            ]);

        Spark::plan('Starter', 'starter-monthly')
            ->price(1.99)
            ->features([
                'First', 'Second', 'Third'
            ]);

        Spark::plan('Grower Lite', 'grower-lite-monthly')
            ->price(8.99)
            ->features([
                'First', 'Second', 'Third'
            ]);

        Spark::plan('Grower Pro', 'grower-pro-monthly')
            ->price(18.99)
            ->features([
                'First', 'Second', 'Third'
            ]);

        Spark::plan('Starter', 'starter-yearly')
            ->price(19.99)
			->yearly()
            ->features([
                'First', 'Second', 'Third'
            ]);

        Spark::plan('Grower Lite', 'grower-lite-yearly')
            ->price(89.99)
			->yearly()
            ->features([
                'First', 'Second', 'Third'
            ]);

        Spark::plan('Grower Pro', 'grower-pro-yearly')
            ->price(189.99)
			->yearly()
            ->features([
                'First', 'Second', 'Third'
            ]);
    }
}
