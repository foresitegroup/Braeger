<?php
$TopDir = (basename(dirname($_SERVER['PHP_SELF'])) == "blog") ? "../" : "";

function email($address, $name="") {
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

  <title>Braeger Auto Finance Group<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
  <meta name="description" content="Braeger Auto Finance Group, LLC is a finance company providing capital support to independent used car dealers to improve their credit facility and lower their cost of funds, by raising capital via secured debentures to qualified financial partners, both individuals and institutions.">
  <meta name="keywords" content="Braeger Financial Group, Braeger Auto Finance Group, Dave Braeger, Gary Bakker, investment, investor, auto finance, credit facility, secure, secured, debenture, financing, capital, independent, used car, auto, auto dealer, floorplan, individual investing, institutional investing, subprime">
  <meta name="author" content="Foresite Group">

  <link rel="shortcut icon" href="<?php echo $TopDir; ?>images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">
  <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/braeger2013.css" type="text/css" media="screen,print">

  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.9.0.js"></script>
  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.cycle.all.js"></script>
  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.reflection.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      $("#rotating").cycle({ fx: 'fade', speed: 2000, timeout: 7000 });
      $(".reflect").reflect({ height: 0.5, opacity: 0.1 });
      $(".reqcheck").click(function() {
        var unchecked = $(".reqcheck:not(:checked)").length;
        if (unchecked == 0) {
          $("#submit").removeAttr("disabled");
        }
        else {
          $("#submit").attr("disabled", "disabled");
        }
      });
    });
  </script>
  <!--[if lt IE 9 ]>
  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/IE9.js"></script>
  <![endif]-->
  <!--[if lt IE 7 ]>
  <script type="text/javascript" src="<?php echo $TopDir; ?>inc/dd_belatedpng.js"></script>
  <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
  <![endif]-->
  
  <?php
  echo $HeadInc;
  if (basename(dirname($_SERVER['PHP_SELF'])) == "blog") {
    wp_head();
    echo '<link rel="stylesheet" type="text/css" media="all" href="' . $TopDir . 'blog/wp-content/themes/braeger/style.css" />';
  }
  ?>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48425429-1', 'braegerfinancial.com');
    ga('send', 'pageview');
  </script>
</head>
<body>

<div id="header-wrap">
  <div id="header">
    <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Braeger Financial Group" id="logo"></a>

    <ul id="menu">
      <li><a href="<?php echo $TopDir; ?>.">Home</a></li>
      <li>
        <a href="<?php echo $TopDir; ?>services-overview.php">Services Overview</a>
        <ul>
          <li><a href="<?php echo $TopDir; ?>services-overview.php">Services Overview</a></li>
          <li><a href="<?php echo $TopDir; ?>driven-to-deliver.php">Driven to Deliver</a></li>
          <li><a href="<?php echo $TopDir; ?>auto-dealers.php">Auto Dealers</a></li>
          <li><a href="<?php echo $TopDir; ?>accredited-investors.php">Accredited Investors</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo $TopDir; ?>auto-finance-renewable-note-program.php">Auto Finance Renewable Note Program</a>
        <ul>
          <li><a href="<?php echo $TopDir; ?>auto-finance-renewable-note-program.php">Introduction</a></li>
          <li><a href="<?php echo $TopDir; ?>note-description.php">Note Description</a></li>
          <li><a href="<?php echo $TopDir; ?>note-advantage.php">Note Advantage</a></li>
          <li><a href="<?php echo $TopDir; ?>braeger-advantage.php">Braeger Advantage</a></li>
        </ul>
      </li>
      <li>
        <a href="<?php echo $TopDir; ?>about-us.php">About Us</a>
        <ul>
          <li><a href="<?php echo $TopDir; ?>about-us.php">About Us</a></li>
          <li><a href="<?php echo $TopDir; ?>david-braeger.php">David Braeger</a></li>
          <li><a href="<?php echo $TopDir; ?>gary-bakker.php">Gary Bakker</a></li>
          <li><a href="<?php echo $TopDir; ?>rakesh-mishra.php">Rakesh Mishra</a></li>
        </ul>
      </li>
      <li><a href="<?php echo $TopDir; ?>contact-us.php">Contact Us</a></li>
    </ul>
    
    <div style="float: right; position: relative; bottom: 5px;">
      <a href="https://www.facebook.com/BraegerAutoFinanceGroup"><img src="<?php echo $TopDir; ?>images/icon-facebook.png" alt="Facebook"></a>
      <a href="http://www.linkedin.com/company/braeger-financial-group-llc"><img src="<?php echo $TopDir; ?>images/icon-linkedin-32.png" alt="LinkedIn"></a>
      <a href="https://plus.google.com/u/0/108932173536634244630/about?hl=en"><img src="<?php echo $TopDir; ?>images/icon-googleplus.png" alt="Google+"></a>

      <a title="Braeger Auto Financial Group BBB Business Review" href="http://www.bbb.org/wisconsin/business-reviews/financing/braeger-auto-financial-group-in-milwaukee-wi-1000019780/#bbbonlineclick"><img alt="Braeger Auto Financial Group BBB Business Review" src="http://seal-wisconsin.bbb.org/seals/blue-seal-96-50-braeger-auto-financial-group-1000019780.png" style="height: 32px; width: auto; margin-left: 5px;"></a>
    </div>

    <div style="clear: both;"></div>
  </div> <!-- END header -->
</div> <!-- END header-wrap -->

<?php if ($PageTitle == "") { ?>
<div id="rotating">
  <img src="images/banner3.jpg" alt="">
  <img src="images/banner2.jpg" alt="">
  <img src="images/banner1.jpg" alt="">
</div> <!-- END rotating -->
<?php } else { ?>
<div id="banner-sub">
  <?php $TheBanner = ($PageBanner == "") ? "banner-sub.jpg" : $PageBanner; ?>
  <img src="<?php echo $TopDir; ?>images/<?php echo $TheBanner; ?>" alt="">
</div> <!-- END banner-sub -->
<?php } ?>

<div id="content">
  