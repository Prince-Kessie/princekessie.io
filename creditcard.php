<!DOCTYPE html>
<html lang="en">

<?php include 'includes\head.php'; ?>

<body>
    <div class="wrapper1">
    <h3 style="color: green; padding-left: 20px;"><strong>Sorry, this page is still under update,
        <br>Please use mobile money instead!</strong>
        <a href="method.php" type="radio" id="tcolorA" class="pay"
                    style="color: orange; font-weight: bold; text-decoration: underline; padding-left: 4px;">
                   Back>>
                </a></h3>
        
        <h2>Donation or Give Form</h2>

        <form action="#" method="#">
            <h5>Enter Card Details</h5>
            <div class="input_group">
                <div class="input_box">
                    <label>Card Number</label>
                    <input type="text" placeholder="Enter card number" class="name" required>
                    <i class="fa fa-map-marker icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <label>Expiry date</label>
                    <input type="text" placeholder="Enter expiry date" class="name"
                    maxlength="8" required>
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input_group">
                    <div class="input_box">
                        <label>CVV</label>
                        <input type="text" placeholder="Enter CVV" class="name" 
                        maxlength="5" required>
                        <i class="fa fa-envelope icon"></i>
                    </div>
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <label>Email</label>
                    <input type="email" placeholder="Enter email" class="name" required>
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <label>Amount</label>
                    <input type="text" placeholder="Enter address" class="name" required>
                    <i class="fa fa-map-mark icon"></i>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Now" class="btn btn-success py-3 px-5">
                <a href="method.php" type="radio" id="tcolorA" class="pay"
                    style="color: orange; font-weight: bold; text-decoration: underline; ">
                   Back>>
                </a>
              </div>
              <h3 style="color: green; padding-left: 20px;"><strong>
            <span style="padding-left: 1px;">Sorry, this page is still under update,</span>
        <br>Please use mobile money instead!</strong></h3>
        </form>
    </div>

</body>

</html>