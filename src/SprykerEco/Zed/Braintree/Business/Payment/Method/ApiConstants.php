<?php

/**
 * MIT License
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerEco\Zed\Braintree\Business\Payment\Method;

interface ApiConstants
{
    const SALE = 'sale';
    const CREDIT = 'credit';

    const TRANSACTION_CODE_AUTHORIZE = 'authorize';
    const TRANSACTION_CODE_CAPTURE = 'capture';
    const TRANSACTION_CODE_REVERSAL = 'reversal';
    const TRANSACTION_CODE_REFUND = 'refund';

    const STATUS_CODE_PRE_CHECK = 'pre check';
    const STATUS_CODE_AUTHORIZE = 'authorized';
    const STATUS_CODE_CAPTURE = 'settling'; // Braintree\Transaction::SETTLEMENT_CONFIRMED
    const STATUS_CODE_CAPTURE_SUBMITTED = 'submitted_for_settlement';
    const STATUS_CODE_REVERSAL = 'voided';
    const STATUS_CODE_REFUND = 'settling';

    const PAYMENT_CODE_AUTHORIZE_SUCCESS = '1000';
    const STATUS_REASON_CODE_SUCCESS = '1';
}
