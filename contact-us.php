<?php
$PageTitle = "Contact Us";
$PageBanner = "banner-sub-contact.jpg";
include "header.php";
?>

<h2>CONTACT US</h2>

<?php
if (isset($_POST['submit'])) {
  $SendTo = "info@braegerfinancial.com";
  $Subject = "Contact From Website";
  $From = "From: Contact Form <contactform@braegerfinancial.com>\r\n";
  $From .= "Reply-To: " . $_POST['email'] . "\r\n";

  $Message = $_POST['name'] . "\n";
  if (!empty($_POST['email'])) $Message .= $_POST['email'] . "\n";
  if (!empty($_POST['phone'])) $Message .= $_POST['phone'] . "\n";

  $Message .= "\n";

  if (!empty($_POST['comment'])) $Message .= "Message:\n" . $_POST['comment'] . "\n";

  $Message = stripslashes($Message);

  mail($SendTo, $Subject, $Message, $From);
  //echo "<pre>".$Message."</pre>";

  echo "Thank you for your interest in Braeger Fininacial Group.<br>You will be contacted soon.";
} else {
?>
  <div style="float: left; width: 400px;">
    We welcome your questions, comments and inquiries.  Please use the convenient form, or contact us directly at 1-844-BRAEGER (1-844-272-3437).  We will be happy to assist you!<br>
    <br>

    Braeger Financial Group, LLC<br>
    135 West Wells Street<br>
    Suite 340<br>
    Milwaukee, WI  53203
  </div>

  <script type="text/javascript">
    <!--
    function checkform (form) {
      if (form.name.value == "") { alert('Name required.'); form.name.focus(); return false; }
      if (form.email.value == "") { alert('Email required.'); form.email.focus(); return false; }
      if (form.phone.value == "") { alert('Phone required.'); form.phone.focus(); return false; }
      if (form.comment.value == "") { alert('Message required.'); form.comment.focus(); return false; }
      return true;
    }
    //-->
  </script>

  <form action="contact-us.php" method="POST" onSubmit="return checkform(this)" style="float: right; width: 360px; margin-right: 100px;">
    <div>
      <div style="float: left; width: 50px;"><strong>Name</strong></div>
      <input type="text" name="name" style="width: 300px;"><br>
      <br>

      <div style="float: left; width: 50px;"><strong>Email</strong></div>
      <input type="text" name="email" style="width: 300px;"><br>
      <br>

      <div style="float: left; width: 50px;"><strong>Phone</strong></div>
      <input type="text" name="phone" style="width: 300px;"><br>
      <br>

      <strong>Message</strong><br>
      <textarea name="comment" rows="8" cols="30" style="width: 350px; height: 150px;"></textarea><br>
      <br>

      <input type="submit" name="submit" value="Submit" style="display: block; margin: 0 auto; font-weight: bold;">
    </div>
  </form>
  
  <div style="clear: both;"></div>
<?php } ?>

<?php include "footer.php"; ?>