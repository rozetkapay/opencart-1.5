<?php
$_['heading_title'] = 'RozetkaPay';
$_['text_rozetkapay'] = '<img src="/image/payment/rozetkapay/rpay.svg"  style="border: 1px solid #EEEEEE;" />';
$_['text_payment'] = 'Payment';
$_['text_extension']     = 'Extensions';
$_['text_success'] = 'Settings updated';
$_['text_pay'] = 'RozetkaPay';
$_['text_card'] = 'Credit Card';
$_['text_all_zones'] = 'All Zones';
$_['entry_login'] = 'Login';
$_['entry_password'] = 'Password';
$_['entry_geo_zone']    = 'Geo Zone';
$_['entry_status'] = 'Status';
$_['entry_qrcode_status'] = 'Qr-code';
$_['entry_holding_status'] = 'Blocked amount(holding)';
$_['entry_sort_order'] = 'Ordering';
$_['error_permission'] = "You haven't permission !";
$_['error_login'] = 'Login is incorrect!';
$_['error_password'] = 'Password is empty!';
$_['text_error_permission'] = "You haven't permission !";
$_['text_error_login'] = 'Login is incorrect!';
$_['text_error_password'] = 'Password is empty!';
$_['text_edit']='Edit';
$_['text_enabled']='Enabled';
$_['text_disabled']='Disabled';
$_['tab_general'] = 'General';
$_['text_tab_order_status'] = 'Order status';
$_['text_order_status_init'] = 'Init';
$_['text_order_status_pending'] = 'Pending';
$_['text_order_status_success'] = 'Success';
$_['text_order_status_failure'] = 'Failure';
$_['text_tab_test'] = 'Testing';
$_['entry_log_status'] = 'Log';
$_['text_test_cards'] = 'Testing cards';
$_['text_test_log_title'] = ' Log list';
$_['text_refund_amount'] = 'Refund amount';
$_['text_refund_button'] = 'Refund';
$_['text_transaction_datatime'] = 'Data Time';
$_['text_transaction_amount'] = 'Amount';
$_['text_transaction_status'] = 'Status';
$_['text_transaction_type'] = 'Type';
$_['text_success'] = 'Success';
$_['text_failure'] = 'Failure';
$_['text_payRefund_error_order_id'] = 'error_order_id';
$_['text_payRefund_error_total'] = 'error total';
$_['button_log_clear'] = 'Clear';
$_['button_log_download'] = 'Download';


$_['button_pay_holding'] = 'Go to payment (holding)';
/*
$_['error_code_test_transaction'] = 'Test transaction';
$_['error_code_transaction_successful'] = 'Transaction successful';
$_['error_code_transaction_successful'] = 'Transaction is successful, it will be transferred in daily settlement';
$_['error_code_transaction_successful'] = 'Protected transaction. Charging is successful, waiting for receipt of goods confirmation';
$_['error_code_reverse_successful'] = 'Funds are reserved to make a refund according to a refund request';
$_['error_code_reverse_successful'] = 'Refund successful';
$_['error_code_subscription_successful'] = 'Subscription successful';
$_['error_code_unsubscribed_successfully'] = 'Unsubscribed successfully';
$_['error_code_transaction_successful'] = 'Amount was successfully blocked on the sender\'s account';
$_['error_code_transaction_successful'] = 'Amount is charged successfully but the store is still not verified. Store need to be activated within 90 days, otherwise transaction will be automatically cancelled.';
$_['error_code_reverse_successful'] = 'Reverse successful';
$_['error_code_pending'] = 'Pending';
$_['error_code_pending'] = 'Pending';
$_['error_code_pending'] = 'Pending';
$_['error_code_wrong_pin'] = 'Wrong PIN';
$_['error_code_wrong_amount'] = 'Wrong amount';
$_['error_code_wrong_authorization_code'] = 'Wrong authorization code';
$_['error_code_wrong_cavv'] = 'Wrong CAVV';
$_['error_code_wrong_cvv'] = 'Wrong CVV2';
$_['error_code_internal_error'] = 'Internal error. Please try again.';
$_['error_code_wrong_account_number'] = 'Wrong account number';
$_['error_code_capture_required'] = 'Capture required';
$_['error_code_anti_fraud_check'] = 'Transaction is on anti-fraud check';
$_['error_code_3ds_required'] = '3DS verification is required to finish the transaction.';
$_['error_code_cvv_is_required'] = 'CVV is required';
$_['error_code_otp_confirmation_required'] = 'OTP confirmation is required. OTP is sent to a customer phone number.';
$_['error_code_receiver_info_required'] = 'Receiver info required';
$_['error_code_sender_info_required'] = 'Sender info required';
$_['error_code_missed_payout_method_data'] = 'Missed payout method data';
$_['error_code_waiting_for_verification'] = 'Waiting for verification via captcha';
$_['error_code_waiting_for_verification'] = 'Waiting for verification via IVR call';
$_['error_code_waiting_for_verification'] = 'Waiting for verification via Privat24';
$_['error_code_waiting_for_verification'] = 'Waiting for customer's phone number verification';
$_['error_code_waiting_for_verification'] = 'Waiting for customer's pin-code verification';
$_['error_code_waiting_for_verification'] = 'Waiting for verification via SENDER app';
$_['error_code_waiting_for_verification'] = 'Waiting for verification via QR code';
$_['error_code_waiting_for_verification'] = 'Waiting for transaction verification via Privat24/SENDER application';
$_['error_code_waiting_for_complete'] = 'Waiting for transaction complete in Privat24';
$_['error_code_waiting_for_complete'] = 'Waiting for transaction complete in MasterPass';
$_['error_code_waiting_for_complete'] = 'Waiting for cash transaction at Self-Service Machine';
$_['error_code_transaction_created'] = 'Invoice is created successfully, waiting for a transaction.';
$_['error_code_transaction_created'] = 'Transaction is created successfully, waiting for sender to complete.';
$_['error_code_pending'] = 'Transaction is processing';
$_['error_code_authorization_required'] = 'Authorization required';
$_['error_code_card_verification_required'] = 'Card verification is required.';
$_['error_code_3ds_required'] = '3DS verification is required';
$_['error_code_waiting_for_redirect'] = 'Waiting for redirect to the checkout page';
$_['error_code_waiting_for_redirect'] = 'Waiting for redirect to continue payment';
$_['error_code_waiting_for_clarification'] = 'Waiting for clarification';
$_['error_code_invalid_data'] = 'Invalid data. Missed required input fields';
$_['error_code_card_expired'] = 'Payment card expired';
$_['error_code_incorrect_refund_sum_or_currency'] = 'Incorrect refund sum or currency';
$_['error_code_payment_card_has_invalid_status'] = 'Payment card has invalid status';
$_['error_code_invalid_data'] = 'Wrong data used at Info input.';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error. Please try again.';
$_['error_code_wrong_card_number'] = 'Wrong card number';
$_['error_code_insufficient_funds'] = 'Insufficient funds';
$_['error_code_transaction_limit_exceeded'] = 'Transaction limit exceeded. Try another card.';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_invalid_data'] = 'Transaction amount limit exceeded. Try another card.';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_pin_tries_exceeded'] = 'PIN tries exceeded. Capture is required.';
$_['error_code_card_expired'] = 'Card expired';
$_['error_code_payment_card_has_constraints'] = 'Payment card has constraints';
$_['error_code_pin_tries_exceeded'] = 'Number of PIN tries exceeded.';
$_['error_code_user_not_found'] = 'User not found';
$_['error_code_failed_to_send_sms'] = 'Failed to send sms';
$_['error_code_wrong_sms_password'] = 'Wrong sms password';
$_['error_code_card_not_found'] = 'Card not found in wallet for receiving payments.';
$_['error_code_payment_system_not_supported'] = 'This card payment system is not supported. Please enter another card.';
$_['error_code_invalid_card_type'] = 'Invalid card type.';
$_['error_code_country_not_supported'] = 'This country is not supported. Please enter another card.';
$_['error_code_transaction_amount_limit'] = 'Amount of transaction is more or less than the limit.';
$_['error_code_transaction_amount_limit'] = 'Amount of transaction is more or less than the limit.';
$_['error_code_transaction_amount_limit'] = 'Transaction amount limit is exceeded.';
$_['error_code_payment_card_has_constraints'] = 'Please, enter sender's another card.';
$_['error_code_no_discount_found'] = 'No discount found for the transaction.';
$_['error_code_failed_to_load_the_wallet'] = 'Failed to load the wallet.';
$_['error_code_invalid_verification_code'] = 'Invalid verification code.';
$_['error_code_additional_information_is_pending'] = 'Additional information is pending. Please, try later.';
$_['error_code_split_amount_is_not_equal_to_transaction_amount'] = 'Split amount is not equal to transaction amount.';
$_['error_code_transaction_is_not_recurring'] = 'Transaction is not recurring.';
$_['error_code_invalid_currency'] = 'Transaction currency does not match with debit currency.';
$_['error_code_capture_amount_cannot_be_more_than_the_transaction_amount'] = 'Capture amount cannot be more than the transaction amount.';
$_['error_code_internal_error'] = 'Such order_id already exists in the system.';
$_['error_code_parameter_is_empty'] = 'Parameter is empty.';
$_['error_code_invalid_phone_number'] = 'Phone parameter is empty.';
$_['error_code_parameter_is_empty'] = 'Parameter is not transferred.';
$_['error_code_invalid_data'] = 'Invalid parameter.';
$_['error_code_invalid_currency'] = 'Invalid currency. Please use: USD, UAH, RUB, EUR.';
$_['error_code_invalid_phone_number'] = 'Invalid phone number.';
$_['error_code_invalid_card_number'] = 'Invalid card number.';
$_['error_code_card_bin_not_found'] = 'Card bin is not found.';
$_['error_code_currency_rate_not_found'] = 'Currency exchange rate is not found.';
$_['error_code_invalid_recipient_name'] = 'Invalid recipient name.';
$_['error_code_daily_card_usage_limit_reached'] = 'Daily card usage limit reached.';
$_['error_code_internal_error'] = 'Such order_id already exists in the system.';
$_['error_code_transaction_for_this_country_are_forbidden'] = 'Transaction for this country are forbidden.';
$_['error_code_card_expired'] = 'Expired card.';
$_['error_code_invalid_card_number'] = 'Invalid card number';
$_['error_code_card_not_supported'] = 'Card does not support such transaction type.';
$_['error_code_card_not_supported'] = 'Card does not support such transaction type.';
$_['error_code_insufficient_funds'] = 'Insufficient funds.';
$_['error_code_transaction_amount_limit'] = 'Transaction amount limit is exceeded.';
$_['error_code_invalid_transaction_amount'] = 'Invalid transaction amount.';
$_['error_code_transaction_declined'] = 'Transaction is declined. Please check if the card details are correct.';
$_['error_code_otp_confirmation_timeout'] = 'OTP confirmation timeout';
$_['error_code_transaction_amount_limit'] = 'Transaction amount limit is exceeded.';
$_['error_code_transaction_amount_limit'] = 'Transaction amount limit is exceeded.';
$_['error_code_invalid_card_data'] = 'Invalid card data';
$_['error_code_confirmation_timeout'] = 'Privat24 confirmation timeout';
$_['error_code_confirmation_timeout'] = 'SenderApp confirmation timeout';
$_['error_code_confirmation_timeout'] = '3-D Secure verification timeout';
$_['error_code_timeout'] = 'Timeout';
$_['error_code_session_expired'] = 'Session expired';
$_['error_code_invalid_operation'] = 'Invalid operation';
$_['error_code_invalid_input_fields'] = 'Invalid input fields';
$_['error_code_invalid_configuration'] = 'Invalid configuration. Please, contact technical support.';
$_['error_code_transaction_rejected'] = 'Transaction rejected';
$_['error_code_transaction_rejected'] = 'Transaction is rejected by anti-fraud';
$_['error_code_transaction_rejected'] = 'Transaction was declined by blacklist';
$_['error_code_card_not_supported'] = 'Card not supported';
$_['error_code_authorization_error'] = 'Authorization failed. Please, contact issuer bank.';
$_['error_code_transaction_rejected'] = 'Transaction rejected. Please, contact issuer bank.';
$_['error_code_failed_to_create_transaction'] = 'Failed to create transaction';
$_['error_code_invalid_operation'] = 'Invalid operation';
$_['error_code_operation_is_prohibited'] = 'The transaction has incorrect attributes or this operation is prohibited.';
$_['error_code_transaction_rejected'] = 'Payment rejected. Please contact support.';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_transaction_not_supported'] = 'Transaction is not supported by provider';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_authorization_error'] = 'Authorization error. Please contact support.';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_authorization_error'] = 'Authorization error. Contact issuer bank';
$_['error_code_this_card_type_is_not_supported'] = 'This card type is not supported';
$_['error_code_timeout'] = 'Timeout';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_transaction_not_supported'] = 'Transaction is not supported. Please contact customer support service';
$_['error_code_internal_error'] = 'Internal error';
$_['error_code_transaction_cache_data_timeout'] = 'Transaction cache data timeout';
$_['error_code_store_is_blocked'] = 'Store is blocked';
$_['error_code_store_is_not_active'] = 'Store is not active';
$_['error_code_wrong_request_signature'] = 'Wrong request signature';
$_['error_code_order_id_is_empty'] = 'Order_id is empty';
$_['error_code_you_are_not_the_agent_of_the_specified_store'] = 'You are not the agent of the specified store';
$_['error_code_user_doesnt_have_a_card_with_such_token'] = 'User doesn\'t have a card with such token.';
$_['error_code_invalid_request_url'] = 'Invalid request url.';
$_['error_code_transaction_cannot_be_processed'] = 'Transaction cannot be processed';
$_['error_code_receiver_didnt_set_the_card_to_receive_transactions'] = 'Receiver didn\'t set the card to receive transactions.';
$_['error_code_invalid_transaction_status'] = 'Invalid transaction status.';
$_['error_code_public_key_is_not_found'] = 'Public_key is not found.';
$_['error_code_transaction_not_found'] = 'Transaction is not found.';
$_['error_code_access_error'] = 'Access error';
$_['error_code_access_blocked'] = 'Access to account is blocked.';
$_['error_code_terminal_not_found'] = 'Terminal is not found.';
$_['error_code_fee_not_found'] = 'Fee is not found.';
$_['error_code_failed_to_create_transaction'] = 'Failed to create transaction.';
$_['error_code_failed_to_verify_a_card'] = 'Failed to verify a card.';
$_['error_code_currency_is_prohibited'] = 'Currency is prohibited.';
$_['error_code_failed_to_finish_the_transaction'] = 'Failed to finish the transaction.';
$_['error_code_failed_to_finish_the_transaction'] = 'Failed to finish the transaction';
$_['error_code_invalid_transaction_type'] = 'Invalid transaction type.';
$_['error_code_currency_is_prohibited'] = 'Transaction currency is prohibited.';
$_['error_code_invalid_signature'] = 'Invalid transaction request signature.';
$_['error_code_action_parameter_is_not_sent_in_request'] = 'Action parameter is not sent in request.';
$_['error_code_callback_parameter_is_not_transferred'] = 'Callback parameter is not transferred.';
$_['error_code_restricted_ip'] = 'This merchant is restricted to call API from this IP.';
$_['error_code_card_does_not_support_3ds'] = 'Card does not support 3-D Secure.';
$_['error_code_general_error'] = 'General error during processing.';
$_['error_code_invalid_token'] = 'Token doesn\'t belong to this merchant.';
$_['error_code_received_token_is_inactive'] = 'Received token is inactive.';
$_['error_code_token_reached_the_maximum_purchase_amount'] = 'Token reached the maximum purchase amount.';
$_['error_code_token_transactions_limit_exceeded'] = 'Token transactions limit exceeded.';
$_['error_code_card_not_supported'] = 'Card not supported.';
$_['error_code_merchant_is_not_allowed_preauth'] = 'Merchant is not allowed preauth.';
$_['error_code_3ds_not_supported'] = 'Acquirer does not support 3-D Secure.';
$_['error_code_this_token_does_not_exist'] = 'This token does not exist.';
$_['error_code_reached_the_limit_of_attempts_for_this_ip'] = 'Reached the limit of attempts for this IP.';
$_['error_code_session_expired'] = 'Session expired.';
$_['error_code_card_branch_is_blocked'] = 'Card branch is blocked.';
$_['error_code_card_branch_daily_limit_reached'] = 'Card branch daily limit reached.';
$_['error_code_temporarily_closed_the_p2p_transactions_from_pb_cards_to_foreign_banks_cards'] = 'Temporarily closed the P2P transactions from PB cards to foreign banks' cards.';
$_['error_code_completion_limit_reached'] = 'Completion limit reached.';
$_['error_code_transaction_declined'] = 'Transaction is declined. Please, try again later.';
$_['error_code_transaction_declined'] = 'Transaction is declined. Bank did not approve the transaction. Please, contact the bank.';
$_['error_code_transaction_declined'] = 'Bank did not approve the transaction. Please, contact the bank.';
$_['error_code_transaction_declined'] = 'Invalid parameters or transaction is not allowed.';
$_['error_code_merchant_is_not_allowed_for_making_recurring_transactions'] = 'Merchant is not allowed for making recurring transactions.';
$_['error_code_transaction_is_canceled_by_payer'] = 'Transaction is canceled by payer.';
$_['error_code_authorization_error'] = 'Authorization error. Contact issuer bank.';
$_['error_code_3ds_not_supported'] = 'Failed to verify the card for participation in 3DSecure.';
$_['error_code_payment_was_refunded'] = 'Payment was refunded.';
$_['error_code_acs_service_unavailable'] = 'ACS Service Unavailable.';
$_['error_code_anti_fraud_check'] = 'Transaction is on antifraud check';
$_['error_code_transaction_limit_exceeded'] = 'The limit for the amount or number of customer payments has been exceeded. Amount or transaction limit has been exceeded.';
$_['error_code_anti_fraud_check'] = 'The transaction is rejected by bank's anti-fraud rules.';
$_['error_code_anti_fraud_check'] = 'The transaction is declined by bank's anti-fraud system.';
$_['error_code_payment_card_is_lost_or_stolen'] = 'Payment card is lost or stolen';
$_['error_code_transaction_declined'] = 'Transaction was declined by internal blacklist.';
$_['error_code_unknown_error'] = 'Unknown error. Please, contact technical support.';
 */