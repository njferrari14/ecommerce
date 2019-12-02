<div align="center"><img src="/images/checkout_indicator2.png" /></div>
<br clear="all" />
<?php
include('./views/checkout_cart.html');
echo BOX_BEGIN;
echo '<div class="inner">
<h2>Your Billing Information</h2>
<p>Please enter your billing information below. Then click the button to complete your order. For your security, we will not store your billing information in any way. We accept Visa, MasterCard, American Express, and Discover.</p>';
if (isset($message)) echo "<p class=\"error\">$message</p>";
echo '<form action="/billing.php" method="POST" id="billing_form">';
include('./includes/form_functions.inc.php');
echo '<span class="error" id=error_span"></span>';
?>
<fieldset>
<div class="field"><label for="cc_number"><strong>Card Number</strong></label><br />
<input type="text" id="cc_number" autocomplete="off" />
</div>
<div class="field"><label for="exp_date"><strong>Expiration Date</strong></label><br />
<input type="text" id="cc_exp_month" autocomplete="off" />/<input type="text" id="cc_exp_year" autocomplete="off" />
</div>
<div class="field"><label for="cc_cvv"><strong>CVV</strong></label><br /><input type="text" id="cc_cvv" autocomplete="off" /></div>
<div class="field"><label for="cc_first_name"><strong>First Name</strong></label><br /><?php create_form_input('cc_first_name', 'text', $billing_errors, $values); ?></div>
<div class="field"><label for="cc_last_name"><strong>Last Name</strong></label><br /><?php create_form_input('cc_last_name', 'text', $billing_errors, $values); ?></div>
<div class="field"><label for="cc_address"><strong>Street Address </strong></label><br /><?php create_form_input('cc_address', 'text', $billing_errors, $values); ?></div>
<div class="field"><label for="cc_city"><strong>City </strong></label><br /><?php create_form_input('cc_city', 'text', $billing_errors, $values); ?></div>
<div class="field"><label for="cc_state"><strong>State</strong></label><br /><?php create_form_input('cc_state', 'select', $billing_errors, $values); ?></div>
<div class="field"><label for="cc_zip"><strong>Zip Code</strong></label><br /><?php create_form_input('cc_zip', 'text', $billing_errors, $values); ?></div>
<br clear="all" />
<div align="center" id="submit_div"><input type="submit" value="Place Order" class="button" /></div></fieldset></form>
<div>By clicking this button, your order will be completed and your credit card will be charged.</div>
<?php echo BOX_END; ?>
<script type="text/javascript">
$(function() {
    $('#billing_form').submit(function() {
        $('input[type-submit]', this).attr('disabled', 'disabled');
        $('#submit_div').html('<p class="button">Processing...</p>');
        <form action="/billing.php" method="POST" id="billing_form">
        <div align="center" id="submit_div">
    });
});
</script>