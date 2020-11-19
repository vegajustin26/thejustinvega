<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=0">
<html>
<head>
  <title> Photography Portfolio</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/animate.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/lightcase.css">
  <script type="text/javascript" src="../js/lightcase.js"></script>
  <script type="text/javascript" src="../js/jquery.events.touch.js"></script>
  <script type="text/javascript" src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:200" rel="stylesheet">
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
  </header>
<body id = "photomain">
  <div id = "photosite">
    <div class = "left">
      <a href="../img/Portfolio/portraitfinal/julie.jpg" data-rel="lightcase:portraits"><p id = "portraitcap">Portraits</p><img id = "portrait" src="../img/Portfolio/thumb/port_thm.jpg"><img id = "portrait-mobile" src="../img/Portfolio/thumb/port_mobile_thm.jpg"></a>
      <a href="../img/Portfolio/portraitfinal/kristina.jpg" data-rel="lightcase:portraits"></a>
      <a href="../img/Portfolio/portraitfinal/karen.jpg" data-rel="lightcase:portraits"></a>
      <a href="../img/Portfolio/portraitfinal/marcus.jpg" data-rel="lightcase:portraits"></a>
      <a href="../img/Portfolio/portraitfinal/andrea.jpg" data-rel="lightcase:portraits"></a>
      <a href="../img/Portfolio/portraitfinal/sultan.jpg" data-rel="lightcase:portraits"></a>
      <a href="../img/Portfolio/portraitfinal/liam.jpg" data-rel="lightcase:portraits"></a>
      <a href="../img/Portfolio/portraitfinal/alden.jpg" data-rel="lightcase:portraits"></a>
      </div>
      <div class = "right">
        <div class = "top-right">
          <a href="../img/Portfolio/landscapefinal/brooklynbridge.jpg" data-rel="lightcase:landscape" data-lc-caption="Brooklyn Bridge, Brooklyn, New York"><p id = "landscapecap">Landscapes</p><img id = "landscape" src="../img/Portfolio/thumb/land_thm.jpg"></a>
          <a href="../img/Portfolio/landscapefinal/multnomah.jpg" data-rel="lightcase:landscape" data-lc-caption="Multnomah Falls, Multnomah County, Oregon"></a>
          <a href="../img/Portfolio/landscapefinal/sanfranstreet.jpg" data-rel="lightcase:landscape" data-lc-caption="San Francisco, California"></a>
          <a href="../img/Portfolio/landscapefinal/goldengate.jpg" data-rel="lightcase:landscape" data-lc-caption="Golden Gate Bridge, San Francisco, California"></a>
          <a href="../img/Portfolio/landscapefinal/antelopecanyon.jpg" data-rel="lightcase:landscape" data-lc-caption="Antelope Canyon"></a>
          <a href="../img/Portfolio/landscapefinal/mountain.jpg" data-rel="lightcase:landscape" data-lc-caption="Multnomah County, Oregon"></a>
        </div>
        <div class = "bottom-right">
          <a href="contact"><p id = "contactcap">Contact</p><img id = "contact" src="../img/Portfolio/thumb/contact_thm.jpg"><img id = "contact-mobile" src="../img/Portfolio/thumb/contact_thm1.jpg"></a>
        </div>
    </div>
    </div>
    <script src="../js/index.js">
      photoportfolio();
    </script>
</body>
</body>
<?php include ("footer.php"); ?>
</html>
