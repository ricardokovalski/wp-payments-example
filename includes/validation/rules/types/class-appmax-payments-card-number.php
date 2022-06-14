<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Class Appmax_Payments_Card_Number
 *
 * @extends Appmax_Payments_Rule
 */
class Appmax_Payments_Card_Number extends Appmax_Payments_Rule implements Appmax_Payments_Rule_Contract
{
    /**
     * @param $value
     */
    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * @return bool
     */
    public function validate(): bool
    {
        return Appmax_Payments_Helper::validate_card_number($this->get_value());
    }
}
