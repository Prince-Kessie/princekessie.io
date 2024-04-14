
<section class="ftco-section testimony-section" style="margin-top: -70px;">
		<?php

		$posts = $conn->query("SELECT * FROM testimony ORDER BY id DESC LIMIT 5");
		$posts->execute();
		$row = $posts->fetchAll(PDO::FETCH_OBJ);

		?>
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Customers Say About Us</h2>
					<p>Our customers are our testimonies and credibility. They are impressed with our helps
						and contributions in making their businesses well known and real.
					</p>
				</div>
			</div>

			<div class="row ftco-animate justify-content-center" style="margin-top: -90px;">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">

						<?php foreach ($row as $row): ?>

							<div class="item">
								<div class="testimony-wrap d-flex">
									<div class="user-img mr-4"
										style="background-image: url('images/<?php echo $row->images; ?>')">
									</div>
									<div class="text ml-2">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="icon-quote-left"></i>
										</span>
										<p>
											<?php echo $row->testimony; ?>
										</p>
										<p class="name">
											<?php echo $row->fullname; ?>
										</p>
										<span class="position">
											<?php echo $row->testifier_title; ?>
										</span>
									</div>
								</div>
							</div>

						<?php endforeach; ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>