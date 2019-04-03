<?php

namespace SprykerEco\Yves\Braintree\Plugin\Provider;

use Silex\Application;
use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;

class PaypalExpressControllerProvider extends AbstractYvesControllerProvider
{
    public const ROUTE_PAYPAL_EXPRESS_SUCCESS_RESPONSE = 'paypal-express-success';

    /**
     * @param \Silex\Application $app
     *
     * @return $this
     */
    protected function defineControllers(Application $app)
    {
        $this->addPaypalExpressSuccessResponseRoute();

        return $this;
    }

    /**
     * @uses \SprykerEco\Yves\Braintree\Controller\PaypalExpressController::successAction()
     *
     * @return $this
     */
    protected function addPaypalExpressSuccessResponseRoute()
    {
        $this->createController(
            '/paypal-express/payment/success',
            static::ROUTE_PAYPAL_EXPRESS_SUCCESS_RESPONSE,
            'Braintree',
            'PaypalExpress',
            'success'
        );

        return $this;
    }
}