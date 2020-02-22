<?php
require_once dirname(__FILE__).'/nes/Dynamix/API.php';
if(isset($_GET['debug'])){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}

$template_name = 'index';
require dirname(__FILE__).'/_creds.php';
require dirname(__FILE__).'/_dynamix.php';
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="https://storage.googleapis.com/wynn-bucket/favicon.ico">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <meta property="og:description" content="Inspired by Mexico's rich heritage of celebratory food and gatherings, Enrique Olvera, Daniela Soto-Innes and Santiago Perez bring their much anticipated contemporary Mexican restaurant Elio to Encore at Wynn Las Vegas. Opening March 2020.">
    <meta property="og:title" content="Elio at Wynn Las Vegas!">
    <meta property="og:url" content="https://www.wynnlasvegas.com/">
    <meta property="og:image" content="https://storage.googleapis.com/wynn-bucket/elio-og-new.jpg">

    <title data-xid="title">Elio at Wynn Las Vegas</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://storage.googleapis.com/wynn-bucket/favicon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/fwf0rjb.css">
    <link rel="stylesheet" href="https://use.typekit.net/epl0coh.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?= $profile->xid("gtm") ?>');</script>
    <!-- End Google Tag Manager -->
  </head>

  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $profile->xid("gtm") ?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div data-xid="cookies" id="cookies" style="font-family:Lato,Roboto,sans-serif;font-weight:100;font-size:.9em;background-color:#191919;padding:.6em;text-align:center;border-radius:.2em;display:none;position:fixed;bottom:0;width:100%;">
      <?= $profile->xid("cookies") ?>
    </div>

    <div class="wynn-header">
      <div class="wynn-logo">
        <a href="https://www.wynnlasvegas.com/" target="_blank">
          <img src="https://cdn.wynnlasvegas.com/-/media/images/wynn-resorts-global/logo/wynn-animated-logo.ashx" alt="Wynn Las Vegas">
        </a>
      </div>
    </div>

    <div class="header">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="elio-logo"><img src="https://storage.googleapis.com/wynn-bucket/elio-logo.png" alt="Elio Logo"></div>

            <div class="elio-intro">
              <div class="elio-intro-txt" data-xid="header-details">
                <?= $profile->xid("header-details") ?>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="formblock">

              <div class="nes-form-block elio-form" id="nes-form-block">

                <div class="elio-form-title"><?= $profile->xid("header1") ?></div>
                <div class="elio-form-subtitle"><?= $profile->xid("header2") ?></div>

                <form autocomplete="on" id="contest_form" action="_submit.php" method="POST">
                  <input type="hidden" name="profile" value="default" />
                  <div class="field-list clear">

                    <div class="form-item required-item">
                      <label class="field-title">
                        First Name<span>*</span>
                      </label>
                      <input class="form-control" name="fname" type="text" spellcheck="false" maxlength="100" required="required">
                    </div>

                    <div class="form-item required-item">
                      <label class="field-title">
                        Last Name<span>*</span>
                      </label>
                      <input class="form-control" name="lname" type="text" spellcheck="false" maxlength="100" required="required">
                    </div>

                    <div class="form-item required-item">
                      <label class="field-title">
                        Email<span>*</span>
                      </label>
                      <input class="form-control" id="email" name="email" type="email" spellcheck="false" required="required">
                    </div>

                    <!-- <div class="form-item required-item">
                      <label class="field-title">
                        Phone<span>*</span>
                      </label>
                      <input class="form-control" id="phone" name="phone" type="tel" spellcheck="false" required="required">
                    </div> -->

                    <div class="form-item required-item">
                      <label class="field-title">
                        Zip Code<span>*</span>
                      </label>
                      <input class="form-control" name="zip" type="number" spellcheck="false" required="required">
                    </div>

                    <div class="form-item required-item optional-item" data-xid="opt_in">
                      <label>
                        <input type="checkbox" value="Yes" name="agecheck" required="required">  I am 18 years of age or older.*
                      </label>
                    </div>

                    <div class="form-item submit-item" data-xid="submit"><?= $profile->xid("submit") ?></div>

                    <div class="form-item disclaimer-item" data-xid="disclaimer">
                      <?= $profile->xid("disclaimer") ?>
                    </div>
                  </div>
                </form>
                <!-- <div class="elio-header-sun"><img src="https://storage.googleapis.com/wynn-bucket/elio-header-sun.png"></div> -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="gallery-sect" data-xid="food-pics">
      <?= $profile->xid("food-pics") ?>
    </div>

    <div class="chef-sect">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="meet-the-founders-txt">meet the founders</div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">

          <div class="col-md-4" data-xid="Enrique-Olvera">
            <?= $profile->xid("Enrique-Olvera") ?>
          </div>

          <div class="col-md-4" data-xid="Daniela-Soto-Innes">
            <?= $profile->xid("Daniela-Soto-Innes") ?>
          </div>

          <div class="col-md-4" data-xid="Santiago-Perez">
            <?= $profile->xid("Santiago-Perez") ?>
          </div>

        </div>
      </div>

    </div>

    <div class="meet-the-chef">
      <div class="container">

        <div class="chefs-icon">
          <img src="https://storage.googleapis.com/wynn-bucket/chefs-icon.png" alt="chefs">
        </div>

        <div class="meet-the-founders-txt">meet the chef</div>

        <div class="row" data-xid="Sarah-Thompson">
          <?= $profile->xid("Sarah-Thompson") ?>
        </div>

      </div>
    </div>

    <div class="gallery-sect" data-xid="drinks">
      <div class="row">
        <?= $profile->xid("drinks") ?>
      </div>
    </div>

    <section class="footer" id="footer">
      <div class="footer-content" data-xid="footer-content">
        <div class="social-icons">
          <li><a href="https://www.facebook.com/elio.lasvegas/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
          <li><a href="https://instagram.com/elio_lv" target="_blank"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://twitter.com/elio_lv" target="_blank"><i class="fab fa-twitter"></i></a></li>
        </div>
        <div class="footer-logo"><img src="https://storage.googleapis.com/wynn-bucket/elio-footer-logo.png" alt="Elio"></div>
        <a href="https://www.wynnlasvegas.com" target="_blank" class="Footer-nav-item">© 2020 Wynn Resorts Holdings, LLC. All rights reserved.</a><br/><br/>
        <a href="https://www.wynnlasvegas.com/" target="_blank">Wynn Las Vegas</a> | <a href="https://www.wynnlasvegas.com/privacy-policy" target="_blank">Privacy</a>
      </div>
    </section>

    <?php echo "<script>var profileURL = '".$profileName."';</script>"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://kit.fontawesome.com/46ce86028b.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
