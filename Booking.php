<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mahasim - Booking</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Include start  -->
  <?php require_once('includes/start.php') ?>

  <main id="main">

    <br/>
    <br/>
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
                <h2>Services</h2>
                <p>Booking</p>
              </header>

              <br/>

              <form action="forms/booking.php" method="POST">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" style="height:50px;border-radius:15px;padding:20px" required>
                  </div>

                  <div class="col-md-6">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" style="height:50px;border-radius:15px;padding:20px" required>
                  </div>

                  <div class="col-md-6">
                    <input type="url" class="form-control" name="website" placeholder="Website URL" style="height:50px;border-radius:15px;padding:20px" required>
                  </div>

                  <div class="col-md-6">
                    <input type="text" class="form-control" name="company" placeholder="Company (if any)" style="height:50px;border-radius:15px;padding:20px">
                  </div>

                  <div class="col-md-6" style="display:none">
                    <input type="text" name="botcheck">
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="8" placeholder="Message" style="border-radius:15px;padding:20px" required></textarea>
                  </div>

                  <div class="col-md-12">
                    <input style="height: 13px" type="checkbox" name="Below-13" placeholder="Message" value="Below-13" style="height:50px;border-radius:15px;padding:20px" required></input>  <a style="font-size:85%">  I agree to Mahasim's </a><a style="font-size:85%" href="https://mahasim.com/PrivacyPolicy">Privacy Policy</a><a style="font-size:85%"> and </a><a style="font-size:85%" href="https://mahasim.com/PrivacyPolicy">Terms & Conditions</a>.
                  </div>

                  <br/>
                  <br/>
                  <br/>

                  <div class="col-md-12 text-center">
                    <button type="submit" style="background: #4154f1;border: 0;padding: 10px 30px;color: #fff;transition: 0.4s;border-radius: 4px;">Book Now</button>
                  </div>

                </div>
              </form>

              <br/>
            </div>
          </div>

          <br/>
          <br/>

          <div class="col-md-12 text-center">
            <p>You may directly send RFQs to <a href="mailto:sales@mahasim.com">sales@mahasim.com</a>.</p>
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
