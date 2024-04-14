<?php include 'includes\head.php'; ?>
<?php include 'includes\conn.inc.php'; ?>

<?php

$posts = $conn->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 6");
$posts->execute();
$row = $posts->fetchAll(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">

<body>

  <?php include 'includes\header.php'; ?>

  <?php include 'includes\image_header.inc.php'; ?>


  <section class="ftco-section bg-light" style="margin-top: -50px;">
    <div class="container">
      <div class="row justify-content-center mt-0 mb-5 pb-2">
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
                <h3 class="heading"><a href="post_single.php?post_id=<?php echo $row->id; ?>">
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
  <?php include 'includes\footer.php'; ?>
</body>

</html>