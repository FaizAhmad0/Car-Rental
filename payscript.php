<?php
$apiKey = "rzp_test_WPi0dkrBP9E4Il";
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<form action="success.html">
    <script src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"
    data-amount="1000000"
    data-currency="INR"
    data-id="<?php echo'OID'.rand(100,999).'END'; ?>"
    data-buttontext="Pay with razorpay"
    data-name="GoDrive"
    data-description="Make payment to move forward"
    data-image="https://img.freepik.com/free-vector/detailed-travel-logo_23-2148616554.jpg?w=740&t=st=1703069377~exp=1703069977~hmac=6f891dd8bb12c65eaa77aed23e3b27d9ae433f19d64ac3c33d1863b97c35bee7"
    data-prefill.name="<?php echo $_POST['name']; ?>"
    data-prefill.email="<?php echo $_POST['email']; ?>"
    data-prefill.mobile="<?php echo $_POST['mobile']; ?>"
    data-theme.color="#F37254"></script>
    <input type="hidden" custom="Hidden Element" name="hidden">
</form>
<style>
    .razorpay-payment-button{
        display: none;
    }
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $('.razorpay-payment-button').click();
    });
</script>