<?php
require_once dirname(__FILE__).'/nes/Dynamix/API.php';
if(isset($_GET['debug'])){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}

$template_name = 'index';
require dirname(__FILE__).'/_creds.php';
// require dirname(__FILE__).'/_dynamix.php';
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta property="og:image:width" content="1200">
  	<meta property="og:image:height" content="628">
  	<meta property="og:description" content="Founded by Daniela Soto-Innes and Enrique Olvera, Elio at Wynn Las Vegas, will offer an elevated social-dining experience and atmosphere where guests can enjoy authentic, Mexican-Inspired cuisine from the world’s top chefs,including Elio's chef de cuisine Sarah Thompson.">
  	<meta property="og:title" content="Elio at Wynn Las Vegas!">
  	<meta property="og:url" content="https://www.wynnlasvegas.com/">
  	<meta property="og:image" content="https://storage.googleapis.com/wynn-bucket/elio-og.jpg">

    <title data-xid="title">Elio at Wynn Las Vegas</title>

    <link rel="shortcut icon" type="image/x-icon" href="https://storage.googleapis.com/wynn-bucket/favicon.ico">
    <link rel="stylesheet" href="https://use.typekit.net/fwf0rjb.css">
    <link rel="stylesheet" href="https://use.typekit.net/epl0coh.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>

  <body>

    <div id="cookies" style="font-family:Lato,Roboto,sans-serif;font-weight:100;font-size:.9em;background-color:#191919;padding:.6em;text-align:center;border-radius:.2em;display:none;position:fixed;bottom:0;width:100%;">
      <span class="cookies-notice" style="color:#fff;">
        This site requires cookies to function properly. You may disable cookies in browser settings.
      </span>
      <span class="cookies-button" style="color:#191919;background-color:#c3db6a;padding:.4em;margin-left:20px;cursor:pointer;border-radius:.2em;">
        I understand
      </span>
    </div>

    <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="elio-logo"><img src="https://storage.googleapis.com/wynn-bucket/elio.png" alt="Elio Logo"></div>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="elio-intro">
              <div class="elio-icon">
                <img src="https://storage.googleapis.com/wynn-bucket/elio-icon.png" alt="Elio Icon">
              </div>
              <div class="elio-intro-txt">
              Founded by Daniela Soto-Innes and Enrique Olvera,
              Elio at Wynn Las Vegas, will offer an elevated
              social-dining experience and atmosphere
              where guests can enjoy authentic,
              Mexican-Inspired cuisine from the world’s
              top chefs, including Elio's chef
              de cuisine Sarah Thompson.
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="formblock">

              <div class="nes-form-block elio-form" id="nes-form-block">

                <div class="elio-form-title">Sign up for ELIO grand opening news and special event invites.</div>
                <div class="elio-form-subtitle"></div>

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

                    <div class="form-item required-item">
                      <label class="field-title">
                        Phone<span>*</span>
                      </label>
                      <input class="form-control" id="phone" name="phone" type="tel" spellcheck="false" required="required">
                    </div>

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

                    <div class="form-item submit-item" data-xid="submit"><input class="field-element submit-button template-submit" type="submit" value="Submit"></div>

                    <div class="form-item disclaimer-item" data-xid="disclaimer">
                      <p>By submitting this form, I agree by electronic signat contacted by SMS text at my mobile phone number and by email (Consent is not required as a condition of purchase); and (2) the <a href="https://www.wynnlasvegas.com/privacy-policy" target="_blank">Privacy Policy</a> and <a href="https://www.visitwynn.com/tc/index.cfm?term_id=708708&_ga=2.47263143.1611320627.1577828871-576353037.1577151598" target="_blank">Terms of Use.</a> Reply STOP to unsubscribe from future messaging. 3msg/month maximum. Msg&Data rates may apply.</p>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="gallery-sect">
      <div class="row">
        <div class="col-md-3">
          <div class="food-pics"><img src="https://storage.googleapis.com/wynn-bucket/food-pic-1.jpg" alt="Elio Food 1"></div>
        </div>
        <div class="col-md-3">
          <div class="food-pics"><img src="https://storage.googleapis.com/wynn-bucket/food-pic-2.jpg" alt="Elio Food 2"></div>
        </div>
        <div class="col-md-3">
          <div class="food-pics"><img src="https://storage.googleapis.com/wynn-bucket/food-pic-3.jpg" alt="Elio Food 3"></div>
        </div>
        <div class="col-md-3">
          <div class="food-pics"><img src="https://storage.googleapis.com/wynn-bucket/food-pic-4.jpg" alt="Elio Food 4"></div>
        </div>
      </div>
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

          <div class="col-md-4">
            <div class="founder-pic">
              <img src="https://storage.googleapis.com/wynn-bucket/enrique.jpg" alt="Enrique Olvera">
            </div>
            <div class="founder-name">Enrique Olvera</div>
            <div class="founder-txt">
              @enriqueolveraf<br/>
              Chef/Partner, Cosme, ATLA, and Pujol Enrique <br/>
              <br/><br/>
              Olvera is the internationally acclaimed chef and restauranteur behind ATM Group (Cosme, ATLA) in the United States and Grupo Olvera in Mexico, which includes Pujol (#1 restaurant in North America on the 2019 World’s 50 Best list). His cooking is rooted in the techniques and ingredients of Mexico and constantly transforms to advance the way people consider andconsume Mexican food.
              <br/><br/>
              In 2020, Olvera and ATM Group team look westward with the upcoming Damian restaurant and Ditroit taqueria openings in downtown Los Angeles as well as the group's forthcoming contemporary Mexican restaurant at Wynn Las Vegas. Olvera recently authored Tu Casa Mi Casa: Mexican Recipes for the Home Cook (Phaidon, 2019).
            </div>
          </div>

          <div class="col-md-4">
            <div class="founder-pic">
              <img src="https://storage.googleapis.com/wynn-bucket/daniela.jpg" alt="Daniela Soto-Innes">
            </div>
            <div class="founder-name">Daniela Soto-Innes</div>
            <div class="founder-txt">
              @danielasotoinnes<br/>
              Chef/Partner, Cosme and ATLA<br/>
              <br/><br/>
              Daniela Soto-Innes is chef/partner of Cosme & ATLA, the contemporary Mexican restaurants in New York City. A Mexico City native who comes from aline of women that love cooking, Soto-Innes pursued a career in food from a young age, enrolling in her high school’s culinary program before moving to Austin, Texas to further her studies at Le Cordon Bleu College of Culinary Arts. After graduating, Soto-Innes traveled and staged extensively before working in Houston at restaurants such as Brennan’s of Houston, Triniti and Underbelly under the mentorship of Chris Shepherd.
              <br/><br/>
              After moving back to Mexico City for a transformative stage at Enrique Olvera’s Pujol, Soto-Innes began working closely with the restaurateur/chef and the two, along with their ATM Group partner Santiago Perez, opened Cosme in 2014. Following the critical success of Cosme, Soto-Innes opened ATLA in 2017 as the chef/partner, introducing the all-day café offering modern Mexican fare. Soto-Innes has received multiple accolades for her work, including being named as 2016 James Beard Rising Star Chef of the Year, recognized on Forbes Magazine’s 2017 30 under 30: Food & Drink list and as the 2019 World’s Best Female Chef.
              <br/><br/>
              She continues to find joy in elevating simple ingredients while working actively to empower her staff and create an inspiring and supportive kitchen culture. In 2020, Soto-Innes and team look westward with the upcoming Damian restaurant and Ditroit taqueria openings in downtown Los Angeles as well as their forthcoming contemporary Mexican restaurant at Wynn Las Vegas.
            </div>
          </div>

          <div class="col-md-4">
            <div class="founder-pic">
              <img src="https://storage.googleapis.com/wynn-bucket/santiago.jpg" alt="Santiago Perez">
            </div>
            <div class="founder-name">Santiago Perez</div>
            <div class="founder-txt">
              @santiago.perez<br/>
              Managing Partner, Cosme, ATLA and Pujol<br/>
              <br/><br/>
              Santiago Perez always felt at home in the hospitality industry and has always had a clear vision of the key principles of excellence in service. After years of working as an investment banker in London and New York, he chose to incorporate his love of hospitality into his career. Over several meetings and a few rounds of mezcal, Perez partnered with acclaimed chef and restaurateur, Enrique Olvera to launch contemporary Mexican restaurant, Cosme to great acclaim. The team then launched ATLA, a more casual interpretation of Modern Mexican cuisine in NoHo in New York City. As Managing Partner of ATM Group, he is currently leading the expansion into the West Coast and strives to provide a fresh interpretation of authentic Mexican culture and cuisine into the USA.
            </div>
          </div>
        </div>
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

        <div class="row">
          <div class="col-md-6">
            <div class="founder-pic">
              <img src="https://storage.googleapis.com/wynn-bucket/sarah.jpg" alt="Sarah Thompson">
            </div>
          </div>
          <div class="col-md-6">
            <div class="founder-name">Sarah Thompson</div>
            <div class="founder-txt">
              Chef de Cuisine
              <br/><br/>
              After graduating from the Culinary Institute of America in Hyde Park in 2010, Sarah Thompson moved to New York City to work on the line at Michelin starred restaurant, Marea. In 2013, she joined the opening team for Wylie Dufrense’s Alder, where she quickly ascended to her first role as sous chef. Daniela Soto-Innes brought her to the Cosme team shortly after opening in 2015, where she worked closely with her as Executive Sous Chef. Thompson departed for a corporate chef role at Andrew Carmellini’s NoHo Hospitality Group in 2017, training BOH management across multiple restaurants including the Locanda Verde, Lafayette and Leuca. She then returned to Cosme in 2019 for the opening of Elio and is excited for her move to Las Vegas to head its opening at Wynn Las Vegas in 2020.
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="gallery-sect">
      <div class="row">
        <div class="col-md-3">
          <div class="food-pics"><img src="https://storage.googleapis.com/wynn-bucket/drink-1.jpg" alt="Elio Drink 1"></div>
        </div>
        <div class="col-md-3">
          <div class="food-pics"><img src="https://storage.googleapis.com/wynn-bucket/drink-2.jpg" alt="Elio Drink 2"></div>
        </div>
        <div class="col-md-3">
          <div class="food-pics"><img src="https://storage.googleapis.com/wynn-bucket/drink-3.jpg" alt="Elio Drink 3"></div>
        </div>
        <div class="col-md-3">
          <div class="food-pics"><img src="https://storage.googleapis.com/wynn-bucket/drink-4.jpg" alt="Elio Drink 4"></div>
        </div>
      </div>
    </div>

    <section class="footer" id="footer">
      <div class="footer-content" data-xid="footer-content">
        <div class="social-icons">
          <li><a href="https://www.facebook.com/elio.lasvegas/" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
          <li><a href="https://instagram.com/elio_lv" target="_blank"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://twitter.com/elio_lv" target="_blank"><i class="fab fa-twitter"></i></a></li>
        </div>
        <div class="footer-logo"><img src="https://storage.googleapis.com/wynn-bucket/footer-logo.jpg" alt="Elio"></div>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    <link rel="stylesheet" href="css/app.css">
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
