<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mahasim - Cost Estimator</title>
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
              <br/>

              <form action="Account/register.php" method="POST">
                <div class="row gy-4">

                  <br/>

                  <h3 style="font-size: 22px;
                  font-weight: 700;
                  margin-bottom: 20px;
                  padding-bottom: 20px;
                  border-bottom: 1px solid #eee;">Customisation</h3>
                  <div class="col-md-12" style="margin-top: 0px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="radio" name="customisation" value="minimal" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="minimal"> Minimal Customisation</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="radio" name="customisation" value="full" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="minimal"> Full Customisation</label>
                  </div>

                  <br/>
                  <br/>
                  <br/>

                  <h3 style="font-size: 22px;
                  font-weight: 700;
                  margin-bottom: 20px;
                  padding-bottom: 20px;
                  border-bottom: 1px solid #eee;">Backend Server</h3>
                  <div class="col-md-12" style="margin-top: 0px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="backendserver" value="automatic" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="automatic"> Choose Automatically</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="backendserver" value="html" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="html"> HTML</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="backendserver" value="css" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="css"> CSS</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="backendserver" value="js" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="js"> JS</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="backendserver" value="php" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="php"> PHP</label>
                  </div>

                  <br/>
                  <br/>
                  <br/>

                  <h3 style="font-size: 22px;
                  font-weight: 700;
                  margin-bottom: 20px;
                  padding-bottom: 20px;
                  border-bottom: 1px solid #eee;">Amounts</h3>
                  <div class="col-md-7" style="margin-top: 0px">
                    <input type="number" name="pages" class="form-control" placeholder="No. of Pages" style="height:50px;border-radius:15px;padding:20px" min="0" max="100" required>
                  </div>
                  <br/>
                  <br/>
                  <br/>
                  <div class="col-md-7" style="margin-top: 0px">
                    <input type="number" name="posts" class="form-control" placeholder="No. of Posts (Blog, Portfolio, etc.)" style="height:50px;border-radius:15px;padding:20px" min="0" max="100">
                  </div>

                  <br/>
                  <br/>
                  <br/>
                  <br/>

                  <h3 style="font-size: 22px;
                  font-weight: 700;
                  margin-bottom: 20px;
                  padding-bottom: 20px;
                  border-bottom: 1px solid #eee;">Design</h3>
                  <div class="col-md-12" style="margin-top: 0px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="radio" name="design" value="simple" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="simple"> Simple</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="radio" name="design" value="stylish" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="stylish"> Stylish</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="radio" name="design" value="highend" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="highend"> High end</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="radio" name="design" value="worldclass" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="worldclass"> World class</label>
                  </div>

                  <br/>
                  <br/>
                  <br/>

                  <h3 style="font-size: 22px;
                  font-weight: 700;
                  margin-bottom: 20px;
                  padding-bottom: 20px;
                  border-bottom: 1px solid #eee;">Language</h3>
                  <div class="col-md-12" style="margin-top: 0px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="radio" name="language" value="british" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="british"> British English</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="radio" name="language" value="american" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="american"> American English</label>
                  </div>

                  <br/>
                  <br/>
                  <br/>

                  <h3 style="font-size: 22px;
                  font-weight: 700;
                  margin-bottom: 20px;
                  padding-bottom: 20px;
                  border-bottom: 1px solid #eee;">Add-ons</h3>
                  <div class="col-md-12" style="margin-top: 0px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="addons" value="security" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="security"> Enhanced security</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="addons" value="mobile" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="mobile"> Mobile Responsive</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="addons" value="seo" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="seo"> SEO Optimisation</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="addons" value="blog" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="blog"> Blog Section</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="addons" value="portfolio" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="portfolio"> Portfolio Section</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="addons" value="chat" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="chat"> Live Chat</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="addons" value="search" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="search"> On-site Search</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="addons" value="account" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="account"> User Account (+ Database)</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="addons" value="basiccms" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="basiccms"> Basic CMS</label>
                  </div>
                  <div class="col-md-12" style="margin-top: 10px">
                    <input style="margin-top: -1px;vertical-align: middle;" type="checkbox" name="addons" value="advcms" style="height:50px;border-radius:15px;padding:20px"></input>
                    <label for="advcms"> Advanced CMS</label>
                  </div>

                  <br/>
                  <br/>
                  <br/>

                  <div class="col-md-12 text-center">
                    <button type="submit" style="background: #4154f1;border: 0;padding: 10px 30px;color: #fff;transition: 0.4s;border-radius: 4px;">Book</button>
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
