<?php include 'includes\conn.inc.php'; ?>

<?php

$posts = $conn->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 2");
$posts->execute();
$row = $posts->fetchAll(PDO::FETCH_OBJ);

?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-6">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2"><span style="color: #fd5f00;">Contact Us Today</span></h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">World Bank Community,
                                    Kakata
                                    city, Margibi County, Liberia</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+231 888 993
                                        339 <br>+231 776 023 811</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">kessieprince9@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 mb-0"><span style="color: #fd5f00;">Connect With Us Via:</span></h2>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a
                                href="https://wwww.facebook.com/profile.php?id=100070036927211"><span
                                    class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a
                                href="https://www.instagram.com/p/C32aCRmsriz/?igsh=YzljYTk1ODg3Zg==">
                                <span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <?php foreach ($row as $row): ?>
                    <div class="ftco-footer-widget mb-5">
                        <h2 class="ftco-heading-2"><span style="color: #fd5f00;">Recent Blog</span></h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url('images/<?php echo $row->img; ?>');"></a>
                            <div class="text">
                                <h3 class="heading"><a href="blog.php?post_id=<?php echo $row->id; ?>">
                                        <?php echo $row->title; ?>
                                    </a></h3>
                                <div class="meta">
                                    <?php echo date('M', strtotime($row->created_at)) . ',' . date('d', strtotime($row->created_at)) . ',' . date('Y', strtotime($row->created_at)); ?>
                                    <div><a href="about.php"><span class="icon-person"></span>
                                            <?php echo $row->user_name; ?>
                                        </a></div>
                                    <div><a href="about.php"><span class="icon-chat"></span>
                                            <?php echo $row->user_id; ?>
                                        </a></div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2"><span style="color: #fd5f00;">Links</span></h2>
                    <ul class="list-unstyled meta">
                        <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                        <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                        <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                        <li><a href="blog.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Blog</a></li>
                        <li><a href="donate.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Donate</a></li>
                        <li><a href="donate.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Give</a></li>
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                        <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                        <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>Our Helpline</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2"><span style="color: #fd5f00;">Subscribe Us!</span></h2>
                    <label>Subscribe now to receive Update & Newsletters direct to your inbox. </label>

                    <form action="includes/footer_subscribe.inc.php" method="post" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" name="subscribe" class="form-control mb-2 text-center"
                                placeholder="Enter Your Email" required>
                            <input type="submit" value="Subscribe Now" class="form-control submit px-3">
                        </div>
                    </form>

                </div>
                <div class="col-md topper d-flex align-items-center justify-content-end" style="margin-left: -50px;">
                    <p class="mb-0">
                        <a href="donate.php"
                            class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                            <span>Donate or Give</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | This website is
                    made with
                    <i class="icon-heart" aria-hidden="true"></i> by <a
                        href="https://wwww.facebook.com/profile.php?id=100070036927211" target="_blank"><span
                            style="color: #fd5f00;">Prince E. Kessie</span></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>