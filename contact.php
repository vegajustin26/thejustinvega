<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
<head>
  <title> Contact Me! </title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:200" rel="stylesheet">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142496000-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142496000-1');
</script>
</head>
  <header>
    <?php include ("navbar.php"); ?>
    <?php include ("sidenav.php"); ?>
    <?php include ("stickynavbar.php"); ?>
  </header>
<body id = "contactmain">
  <main>
  <div id = "contactsite" class="sitecontact section">
    <div class="contact-wrapper">
    <p class = "contactpara"> Questions? Business Inquiries? Discovered a bug on the website? Contact me here! </p>
      <form class="contact-form" action='contactform.php' method = "POST">
        <div>
          <label>First Name:</label><input type='text' name="fname">
        </div>
        <div>
          <label>Last Name:</label><input type='text' name="lname">
        </div>
        <div>
          <label>Email Address:</label><input type='text' name="mail">
        </div>
        <div class = "msg">
          <label>Message:</label><textarea id = 'message' name='msg'></textarea>
        </div>
        <div class="button">
          <button type="submit" name="submit">Send</button>
        </div>
        <?php
        $fullUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullUrl, "signup=empty") == true) {
          echo "<p class='error'>Please fill in all fields.</p>";
        }
        elseif (strpos($fullUrl, "signup=email")== true) {
          echo "<p class='email'>Please enter a valid email.</p>";
        }
        elseif (strpos($fullUrl, "char")== true) {
          echo "<p class='nameerror'>Please enter a valid first and last name.</p>";
        }
        ?>
      </form>
    </div>
  </div>
  </main>
  </body>
</body>
  <script src="../js/index.js"></script>
  <?php include ("footer.php"); ?>
</html>
