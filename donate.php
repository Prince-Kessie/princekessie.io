<!DOCTYPE html>
<html lang="en">

<?php include 'includes\head.php'; ?>

<body style="margin: 0;">
  <div class="wrapper">
    <h2>Donation or Give Form</h2>

    <form action="includes\donate.inc.php" method="POST">
      <h4>Account Information</h4>
      <div class="input_group">
        <div class="input_box">
          <label>Amount</label>
          <input name="amount" type="text" placeholder="Enter amount" class="name" required>
          <i class="fa fa-map-marker icon"></i>
        </div>
      </div>
      <div class="input_group">
        <div class="input_box">
          <label>Fullname</label>
          <input name="fname" type="text" placeholder="Enter fullname" class="name" required>
          <i class="fa fa-user icon"></i>
        </div>
      </div>
      <div class="input_group">
        <div class="input_box">
          <label>Email</label>
          <input name="email" type="email" placeholder="Enter email" class="name">
          <i class="fa fa-envelope icon"></i>
        </div>
      </div>
      <div class="input_group">
        <div class="input_box">
          <label>Phone Number</label>
          <input name="phone" type="text" placeholder="Enter phone number" class="name" required>
          <i class="fa fa-user icon"></i>
        </div>
      </div>
      <div class="input_group">
        <div class="input_box">
          <label>Address</label>
          <input name="address" type="text" placeholder="Enter address" class="name" required>
          <i class="fa fa-map-mark icon"></i>
        </div>
      </div>
      <div class="input_group">
        <div class="input_box">
          <label>Comment</label>
          <textarea name="comment" type="text" rows="2" class="name" placeholder="Send comment or message"></textarea>
          <i class="fa fa-user icon"></i>
        </div>
      </div>
      <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-success py-3 px-5">
        <a href="index.php" type="radio" id="tcolorA" class="pay"
          style="color: orange; font-weight: bold; text-decoration: underline; ">
         Back>>
        </a>
      </div>
    </form>
  </div>
</body>

</html>