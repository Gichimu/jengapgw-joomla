<?php
/**
 * Created by PhpStorm.
 * User: 25470
 * Date: 07/02/2020
 * Time: 10:59
 */

defined('_JEXEC') or die('Restricted access');

?>
<style type="text/css">
    #sagepay_form { width: 100%; }
    #sagepay_form td { padding: 5px; }
    #sagepay_form .field_name { font-weight: bold; }

    .btn-special {
        display: block;
        padding: 10px 25px;
        background: #242EAC;
        color: #fff;
        border: none;
        outline: none;
        margin: 5px;
    }
</style>
<div>

    <form
        id="eazzycheckout-payment-form"
        action="<?php echo ($this->configured_launch_environment); ?>"  method="POST">
        <input type="hidden" id="token" name="token" value="<?php echo  ($vars->tokens); ?>">
        <input type="hidden" id="amount" name="amount" value="<?php echo ($vars->orderpayment_amount * 100); ?>">
        <input type="hidden" id="orderReference" name="orderReference" value="<?php echo ($vars->order_id); ?>">
        <input type="hidden" id="merchantCode" name="merchantCode" value="<?php echo ($this->jpgw_username); ?>">
        <input type="hidden" id="merchant" name="merchant" value="<?php echo ($this->jpgw_merchantname);  ?>">
        <input type="hidden" id="currency" name="currency" value="KES">
        <input type="hidden" id="custName" name="custName" value="CustomerName">
        <input type="hidden" id="outletCode" name="outletCode" value="<?php echo ($this->jpgw_outletcode); ?>">
        <input type="hidden" id="popupLogo" name="popupLogo" value="<?php echo ($this->jpgw_logo); ?>">
        <input type="hidden" id="ez1_callbackurl" name="ez1_callbackurl" value="http://localhost/finshop/index.php/checkout/order-received/58/?key=wc_order_NLpxa7N6EPUPG">
        <input type="hidden" id="ez2_callbackurl" name="ez2_callbackurl" value="http://localhost/finshop/index.php/checkout/order-received/58/?key=wc_order_NLpxa7N6EPUPG">
        <input type="hidden" id="expiry" name="expiry" value="2025-02-17T19:00:00">
        <input type="submit" id="submit-cg" role="button" class="btn btn-primary col-md-4"
               value="Checkout"/>
    </form>

</div>

<?php
//echo @$vars->tokens;
//echo @$this->jpgw_username;
//function debug_log( $object=null, $label=null ){ $message = json_encode($object, JSON_PRETTY_PRINT); $label = "Debug" . ($label ? " ($label): " : ': '); echo "<script>console.log(\"$label\", $message);</script>"; }
//
//?>