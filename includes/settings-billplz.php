<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Settings for PayPal Gateway.
 */
return array(
    'enabled' => array(
        'title' => __('Enable/Disable', 'wcbillplz'),
        'type' => 'checkbox',
        'label' => __('Enable Billplz', 'wcbillplz'),
        'default' => 'yes'
    ),
    'title' => array(
        'title' => __('Title', 'wcbillplz'),
        'type' => 'text',
        'description' => __('This controls the title which the user sees during checkout.', 'wcbillplz'),
        'default' => __('Billplz Payment Gateway', 'wcbillplz')
    ),
    'description' => array(
        'title' => __('Description', 'wcbillplz'),
        'type' => 'textarea',
        'description' => __('This controls the description which the user sees during checkout.', 'wcbillplz'),
        'default' => __('Pay with <strong>Maybank2u, CIMB Clicks, Bank Islam, RHB, Hong Leong Bank, Bank Muamalat, Public Bank, Alliance Bank, Affin Bank, AmBank, Bank Rakyat, UOB, Standard Chartered </strong>. ', 'wcbillplz')
    ),
    'api_key' => array(
        'title' => __('API Secret Key', 'wcbillplz'),
        'type' => 'text',
        'placeholder' => 'Example : ed586547-00b7-459a-a02e-7e876a744590',
        'description' => __('Please enter your Billplz Api Key.', 'wcbillplz') . ' ' . sprintf(__('Get Your API Key: %sBillplz%s.', 'wcbillplz'), '<a href="https://www.billplz.com/enterprise/setting" target="_blank">', '</a>'),
        'default' => ''
    ),
    'collection_id' => array(
        'title' => __('Collection ID', 'wcbillplz'),
        'type' => 'text',
        'placeholder' => 'Example : ugo_7dit',
        'description' => __('Please enter your Billplz Collection ID. ', 'wcbillplz') . ' ' . sprintf(__('Login to Billplz >> Billing >> Create Collection. %sLink%s.', 'wcbillplz'), '<a href="https://www.billplz.com/enterprise/billing" target="_blank">', '</a>'),
        'default' => ''
    ),
    'x_signature' => array(
        'title' => __('X Signature Key', 'wcbillplz'),
        'type' => 'text',
        'placeholder' => 'Example : S-0Sq67GFD9Y5iXmi5iXMKsA',
        'description' => __('Please enter your Billplz X Signature Key. ', 'wcbillplz') . ' ' . sprintf(__('Login to Billplz >> Settings >> Enable X Signature. %sLink%s.', 'wcbillplz'), '<a href="https://www.billplz.com/enterprise/billing" target="_blank">', '</a>'),
        'default' => ''
    ),
    'notification' => array(
        'title' => __('Bill Notification', 'wcbillplz'),
        'type' => 'select',
        'class' => 'wc-enhanced-select',
        'description' => __('No Notification - Customer will NOT receive any notification. Email Only - Customer will receive Email Notification for payment. SMS Only - Customer will receive SMS Notification for payment. Both - Customer will receive Email & SMS Notification for payment.', 'wcbillplz'),
        'default' => 'None',
        'desc_tip' => true,
        'options' => array(
            '0' => __('No Notification', 'wcbillplz'),
            '1' => __('Email Only (FREE)', 'wcbillplz'),
            '2' => __('SMS Only (RM0.15)', 'wcbillplz'),
            '3' => __('Both (RM0.15)', 'wcbillplz')
        )
    ),
    'clearcart' => array(
        'title' => __('Clear Cart Session', 'wcbillplz'),
        'type' => 'checkbox',
        'label' => __('Tick to clear cart session on checkout', 'wcbillplz'),
        'default' => 'no'
    ),
    'debug' => array(
        'title' => __('Debug Log', 'wcbillplz'),
        'type' => 'checkbox',
        'label' => __('Enable logging', 'wcbillplz'),
        'default' => 'no',
        'description' => sprintf(__('Log Billplz events, such as IPN requests, inside <code>%s</code>', 'wcbillplz'), wc_get_log_file_path('billplz'))
    ),
    'instructions' => array(
        'title' => __('Instructions', 'wcbillplz'),
        'type' => 'textarea',
        'description' => __('Instructions that will be added to the thank you page and emails.', 'wcbillplz'),
        'default' => '',
        'desc_tip' => true,
    ),
    'custom_error' => array(
        'title' => __('Error Message', 'wcbillplz'),
        'type' => 'text',
        'placeholder' => 'Example : You have cancelled the payment. Please make a payment!',
        'description' => __('Error message that will appear when customer cancel the payment.', 'wcbillplz'),
        'default' => 'You have cancelled the payment. Please make a payment!'
    )
);
