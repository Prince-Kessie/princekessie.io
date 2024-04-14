<?php include 'includes\head.php'; ?>
<?php include 'includes\conn.inc.php'; ?>

<?php

$posts = $conn->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 3");
$posts->execute();
$row = $posts->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">

<body>

	<?php include 'includes\header.php'; ?>

	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(images/kessie5.png);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start"
					data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h1 class="mb-4">Creativity Needs <br> Great Audience </h1>
						<p>If you can imagine or see something, you can <br> do it. Imagine your business, do the
							business.
						</p>
						<p><a href="contact.php" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(images/pk1.png);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start"
					data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h1 class="mb-4">What are Your Brands?</h1>
						<p>What do you carry to the market? <br> What is your Business uniqueness?
						</p>
						<p><a href="contact.php" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(images/friends.png);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-start"
					data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h1 class="mb-4">Who are your customers?</h1>
						<p>Whose problems are you helping to solve? <br> How can they get to you quickly and easily?
						</p>
						<p><a href="contact.php" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-services ftco-no-pb">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-teacher"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Our Mission</h3>
							<p>Taking your business farther and worldwide and bringing in more money.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-reading"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Our Vision</h3>
							<p>Developing your website, advertising your business uniqueness, and Bringing in more
								customers.</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-books"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Goal &amp; Strategy</h3>
							<p>Choices you make to turn your business or organization's vision into reality.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="flaticon-diploma"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Business Model</h3>
							<p>The blueprint of your business or organization outlining how you will create,
								deliver and capture value.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftc-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
				</div>

				<h2 class=" p-5 "><span style="padding-left: 40px; color: #fd5f00;">What We Offer</span></h2>

				<div class="row mt-1">
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
									class="flaticon-security"></span></div>
							<div class="text pl-3">
								<h3>Website Development</h3>
								<p>Your Website shows the uniqueness of your business and professionalism.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
									class="flaticon-reading"></span></div>
							<div class="text pl-3">
								<h3>Database Management System (DMS)</h3>
								<p>For school, hospital, church, organization, business center, etc.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
									class="flaticon-diploma"></span></div>
							<div class="text pl-3">
								<h3>Business Website</h3>
								<p>Show the uniqueness of your business and attract more customers.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
									class="flaticon-education"></span></div>
							<div class="text pl-3">
								<h3>School Website</h3>
								<p>Show the uniqueness of your school and attract more students.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
									class="flaticon-jigsaw"></span></div>
							<div class="text pl-3">
								<h3>Church Website</h3>
								<p>Reach more people through your church website and make things much simple for your
									members.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
									class="flaticon-kids"></span></div>
							<div class="text pl-3">
								<h3>Organization Website</h3>
								<p>Reach more people through your organization website and make things much
									simple for your membership.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
									class="flaticon-diploma"></span></div>
							<div class="text pl-3">
								<h3>Website for Hospital</h3>
								<p>Reach more people through your website and make things much easier for your workers.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
									class="flaticon-education"></span></div>
							<div class="text pl-3">
								<h3>Resturant Website</h3>
								<p>Reach more clients through your website and make things much easier for your workers.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
									class="flaticon-security"></span></div>
							<div class="text pl-3">
								<h3>Hotel Website</h3>
								<p>Reach more clients through your website and make things much easier for your workers.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="services-2 d-flex">
							<div class="icon mt-2 d-flex justify-content-center align-items-center"><span
									class="flaticon-reading"></span></div>
							<div class="text pl-3">
								<h3>Agricultural Website</h3>
								<p>Reach more clients through your website and make things much easier for your workers;
								<p href="contact.php"><span style="color: #fd5f00;"> And More...
									</span></p>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/pk_bg.png);"
		data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2 d-flex">
				<div class="col-md-6 align-items-stretch d-flex">
					<div class="img img-video d-flex align-items-center"
						style="background-image: url(images/video_prince4.png);">
						<div class="video justify-content-center">
							<a 
								class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
								<span class="ion-ios-play"></span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
					<h2 class="mb-4">Why Need a Website?</h2>
					<p>To expose your business uniqueness and professionalism. <br>
						To market or advertise your products and services worldwide. <br>
						It helps customers know what you're offering or marketing. <br>
						To attract more or new customers easily and at anytime. <br>
						To encourage customers to contact or reach you easily. <br>
						Having a website makes you professional and increases customers level of
						trust to buy from you. <br>
						It easily shows your business location and enables customers to view your
						products and services anytime during the day or night.
						The best is yet for you! For more details
						<a href="contact.php"><span style="color: #fd5f00; text-decoration: underline;">Contact
								Us.</span></a>

					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container-fluid px-4">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Biological &amp; Spiritual Parents</h2>
					<p>Life is never alone, we all are the products of somebody's gifting and sacrifices.
						In the multitudes of counsellors or mentors there is safety.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/sannoh1.png);">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Mr & Mrs Sannoh</h3>
							<span class="position mb-2">Spiritual</span>
							<div class="faded">
								<p>A missionary couple who now live in World Bank Community, Kakata City, Liberia.
									They have made an impact in my life and mentored me positively.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/aunt.jpg);">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Mrs. Serina Korna</h3>
							<span class="position mb-2">Aunt</span>
							<div class="faded">
								<p>A very devoted woman of God who live in the US and had made an impact in my life and
									mentored me positively.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/mom.png);">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Mrs. Particial Paye</h3>
							<span class="position mb-2">Mom</span>
							<div class="faded">
								<p>Live in Monrovia, Liberia. The biological parent of mine who loves me wholeheartedly.
									Her love for me had never failed one day!
								</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/father1.jpg);">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Mr. James Kessie</h3>
							<span class="position mb-2">Dad</span>
							<div class="faded">
								<p>Live in Kakata, Margibi. The biological parent of mine who loves me wholeheartedly.
									His love for me had never failed one day!
								</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light" style="margin-top: -80px;">
		<div class="container-fluid px-4">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Life Friends</h2>
					<p>Life is never alone, We all need friends that can stick closer to us than our brothers or
						sisters.
						Because a good friend loves at all times.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/friend1.png);">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Bro. Alvin & Prince</h3>
							<div class="faded">
								<p>Alvin, a very closest brother of mine who lives in Uganda with his family.
									He was also my closer friend and classmate in the Charis Bible College (CBC) Uganda.
								</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/shine2.png);">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Mrs. Shanitee S Fallah</h3>
							<div class="faded">
								<p>One of my closest friend in my high school days. Through her earnest supports
									she helped me won the presidency election in Lango Lyppaye High School.
								</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/isaac1.png);">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Bro. Isaac P Cooper</h3>
							<div class="faded">
								<p>A very devoted brother who have walked with me with all supports and commitment.
									He is one of the committed leaders of Christ's Disciples Movement (CDM).
								</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a
											href="https://www.facebook.com/profile.php?id=100068589285598&mibextid=eQY6cl"><span
												class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(images/sarah.png);">
							</div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Mrs. Sara Birungi</h3>
							<div class="faded">
								<p>A gogly friend of mine in Uganda that helped me financially during my third year of
									Bible college.
									She mentored me and helped me to stay on track during my study.
								</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
								<p><a href="#" class="btn btn-primary">Read More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/smile1.png);"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-end">
				<div class="col-md-6 py-5 px-md-5">
					<div class="py-md-5">
						<div class="heading-section heading-section-white ftco-animate mb-5">
							<h2 class="mb-4">Have a Question? Ask</h2>
							<p><span style="color: orange;">Note:</span> A website is not the same as a Facebook page or
								an Instagram account which can contain fake information such as name, images, profiles,
								etc. Plus, you have more control over your website than these. A website is secured from
								non-recognize posts or pictures and from hack jack.
								However, we can design your website and link it to your Facebook or Instagram
								page like you see this website. <br> The best is yet for you! For more details
								<a href="contact.php"><span style="color: #fd5f00; text-decoration: underline; ">Contact
										Us.</span></a>
							</p>
						</div>
						<form action="includes/client_question.inc.php" method="post"
							class="appointment-form ftco-animate">
							<div class="d-md-flex">
								<div class="form-group">
									<input type="text" name="fname" class="form-control" placeholder="First Name"
										required>
								</div>
								<div class="form-group ml-md-4">
									<input type="text" name="lname" class="form-control" placeholder="Last Name"
										required>
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Your Email">
								</div>
								<div class="form-group ml-md-4">
									<input type="text" name="contact" class="form-control" placeholder="Your Contact"
										required>
								</div>
							</div>
							<div class="d-md-flex">
								<div class="form-group">
									<textarea name="question" id="" cols="30" rows="2" required class="form-control"
										placeholder="Your Question"></textarea>
								</div>
								<div class="form-group ml-md-4">
									<input type="submit" value="Send Now" class="btn btn-primary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4"><span>Read our</span> Blogs</h2>
					<p>Blog posts allow you and your business to publish insights, thoughts,
						and stories on your website about any topic or about your business. They can help you boost
						brand awareness, credibility, conversions, and revenue.
					</p>
				</div>
			</div>
			<div class="row">

				<?php foreach ($row as $row): ?>

					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="blog-entry">
							<a href="post_single.php" class="block-20 d-flex align-items-end"
								style="background-image: url('images/<?php echo $row->img; ?>');">
								<div class="meta-date text-center p-2">
									<span class="day">
										<?php echo date('d', strtotime($row->created_at)) . '' ?>
									</span>
									<span class="mos">
										<?php echo date('M', strtotime($row->created_at)) . '' ?>
									</span>
									<span class="yr">
										<?php echo date('Y', strtotime($row->created_at)) . '' ?>
									</span>
								</div>
							</a>
							<div class="text bg-white p-4">
								<h3 class="heading"><a href="blog.php?post_id=<?php echo $row->id; ?>">
										<?php echo $row->title; ?>
									</a></h3>
								<p>
									<?php echo $row->body; ?>
								</p>
								<div class="d-flex align-items-center mt-4">
									<p class="mb-0"><a href="blog.php" class="btn btn-primary">Read More <span
												class="ion-ios-arrow-round-forward"></span></a></p>
									<p class="ml-auto mb-0">Posted by:
										<a href="about.php" class="mr-2"><br>
											<?php echo $row->user_name; ?>
										</a>
										<a href="about.php" class="meta-chat"><span class="icon-chat"></span>
											<?php echo $row->user_id; ?>
										</a>
									</p>
								</div>
							</div>
						</div>
					</div>

				<?php endforeach; ?>

			</div>
		</div>
	</section>

	<?php include 'includes\testimony.inc.php'; ?>
	
	<?php include 'includes\footer.php'; ?>
</body>

</html>