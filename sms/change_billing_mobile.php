<?php
// Change default custom slug name from billing_mobile to billing_cellphone

add_filter('iben_sms_checkout_mobile_filter', 'iben_sms_change_custom_billing_mobile');

function iben_sms_change_custom_billing_mobile(){
  return 'billing_cellphone'; 
}
