<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mahasim - Login</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Include start  -->
  <?php require_once('includes/start.php') ?>

  <main id="main">

    <br/>
    <br/>
    <br/>
    <br class="mobile-break"/>
    <br class="mobile-break"/>
    <br class="mobile-break"/>
    <br class="mobile-break"/>
    <br class="mobile-break"/>
    <br class="mobile-break"/>


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-3">
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <br/>
              <br/>

              <header class="section-header">
                <h2>Account</h2>
                <p>Login</p>
              </header>

              <br/>

              <form action="Account/login.php" method="POST">
                <div class="row gy-4">

                  <div class="col-md-12">
                    <input type="text" name="username" class="form-control" placeholder="Username" style="height:50px;border-radius:15px;padding:20px" required>
                  </div>

                  <div class="col-md-12">
                    <input type="password" class="form-control" name="password" placeholder="Password" style="height:50px;border-radius:15px;padding:20px" required>
                  </div>

                  <br/>
                  <br/>
                  <br/>

                  <div class="col-md-12 text-center">
                    <button type="submit" style="background: #4154f1;border: 0;padding: 10px 30px;color: #fff;transition: 0.4s;border-radius: 4px;">Login</button>
                  </div>

                </div>
              </form>

              <br/>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <br/>
  <br/>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://mahasim.com/assets/vendor/purecounter/purecounter.js"></script>
  <script src="https://mahasim.com/assets/vendor/aos/aos.js"></script>
  <script src="https://mahasim.com/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://mahasim.com/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://mahasim.com/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://mahasim.com/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://mahasim.com/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="https://mahasim.com/assets/js/main.js"></script>

  </body>

  </html>
