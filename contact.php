<!DOCTYPE html>
<html lang="en">

<?php include 'includes\head.php'; ?>

<body>

  <?php include 'includes\header.php'; ?>

  <?php include 'includes\image_header.inc.php'; ?>

  <section class="ftco-section contact-section" style="margin-top: -60px;">
    <div class="container">
      <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Address</h3>
            <p>World Bank Commmunity, Kakata City, Margibi County, Liberia</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Contact Number</h3>
            <p><a href="tel://1234567920">+231 888 993
                339 <br>+231 776 023 811</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Email Address</h3>
            <p><a href="mailto:info@yoursite.com">kessieprince9@gmail.com</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light align-self-stretch box p-4 text-center">
            <h3 class="mb-4">Our Website</h3>
            <p><a href="#">princekessie.org</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section" style="margin-top: -34px;">
    <div class="container">
      <div class="row d-flex align-items-stretch no-gutters">

        <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
          <label<><span style="margin-left: 80px;">Send your message or comment</span></label>


            <form action="includes/client_contact.inc.php" method="post">

              <div class="form-group">
                <input type="text" name="fname" class="form-control" placeholder="Your Fullname" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="contact" class="form-control" placeholder="Contact" required>
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" required
                  placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">

              </div>
            </form>
            
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="img">
            <img src="images/contact_prince1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include 'includes\footer.php'; ?>
</body>

</html>