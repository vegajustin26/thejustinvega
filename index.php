<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<html>
  <head>
  <title> Justin Vega </title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:200" rel="stylesheet">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://apis.google.com/js/platform.js"></script>
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css" rel="stylesheet">
  <link rel='icon' href='favicon.ico' type='image/x-icon'/>
  <base target="_parent">
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
<body id = "main">
  <div id = "site" class= "site">
    <div class = "splash-container section">
      <div class="video">
        <iframe id = "ifsplashvid" src="https://www.youtube.com/embed/IIou-ZRDGtU?&autoplay=1&controls=0&modestbranding=1&loop=1&mute=1&playlist=IIou-ZRDGtU" frameborder="0"></iframe>
        <video preload="metadata" id = "splashvid" muted loop playsinline autoplay>
          <source src="https://res.cloudinary.com/dp5rwzhs7/video/upload/v1557371401/intro_tm9qgp.mp4" type="video/mp4">
        </video>
        </div>
      <p class = "oops fadeInRightBig animated"> Physics. <br> Music.<br>Photography.<br>And more.</p>
      <div class = "social fadeInRightBig animated"> <!-- data-aos="fade-in"-->
        <a href="https://www.instagram.com/thejustinvega/"><img src="../img/icons/instagram.png" alt="Instagram"></a>
        <a href="https://open.spotify.com/artist/1QEjNqtk1jD7NapzvFPtuT?si=DaOj8pt6TWO1glhaqE0YAw"><img src="../img/icons/spotify.png" alt="Spotify"></a>
        <a href="https://twitter.com/justinvegaaa"><img src="../img/icons/twitter.png" alt="Twitter"></a>
        <a href="https://github.com/vegajustin26"><img src="../img/icons/github.png" alt="Github"></a>
        <a href="https://www.linkedin.com/in/justin-vega-036180130/"><img src="../img/icons/linkedin.png" alt="LinkedIn"></a>
        <a href="https://www.facebook.com/justinvegaaa/"><img src="../img/icons/facebook.png" alt="Facebook"></a>
      </div>
    </div>
    <div id = "about" class = "about-container section">
      <div id= "one" class="onehalfabout"><img class = "aboutpic" src="../img/me.jpg">
      </div>
      <div id = "two" class = "sechalfabout">
      <p id = "para" class="aboutme" data-aos="fade-up">Hey, I'm Justin Vega! I'm a physicist, singer-songwriter, photographer, and web developer based in Boston, MA.<br><br>My interests range widely from <a id= "downbeats" href = 'https://nudownbeats.com'>a cappella</a> to the cosmos, but I'm always looking for the next opportunity to grab in my multi-disciplinary journey.<br><br> Currently pursuing a B.S in Physics and Philosophy at Northeastern University, with minors in Music Recording and Mathematics.</p>
      <div class = "resume" data-aos="slide-up">
          <a href=""><img id="img" src="../img/icons/resume.png" alt="resume"></a>
          <a id= "resumefile" href="./resume/JVResume_32020.pdf" style="text-decoration: none"><p id = "resume">Resume (3/20/20)</p></a>
        </div>
    </div>
    </div>
      <div id = "research" class = "research-container section">
        <div class = "halfresearch">
          <p class = 'researchpara' data-aos="fade-up"><mark> My main interests within physics are in astrophysics and high-energy physics, and I plan on obtaining a PhD specializing in one of these fields. <br><br> I've worked on the <a href = "https://www.nndc.bnl.gov/endf/project.html">ENDF project </a> at Brookhaven National Laboratory, and I'm currently learning about protoplanetary disks at the Harvard-Smithsonian | Center for Astrophysics. <br><br>I'm currently the webmaster of the <a href='https://web.northeastern.edu/sps'>Society of Physics Students</a> at Northeastern.<mark></p>
        </div>
      </div>
      <div id = "musica" class= "music-container section">
        <div id = "two" class = "rightmusic">
          <iframe id = "amplify" scrolling="no" src="https://ampl.ink/7aGVE" frameborder="0"></iframe>
          <a href = "https://ampl.ink/7aGVE"  target = “_parent”><button id = "listen" type= "button"> Listen </button></a>
        </div>
        </div>
    <div id = "youtube" class= "youtube-container section">
      <div class= "recent1">
        <iframe src="https://www.youtube.com/embed?max-results=1&amp;controls=0&showinfo=0&rel=0&listType=user_uploads&list=eggybounce" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class = "halfyt">
      <div data-aos="fade-up">
        <p class = "ytpara"><a href = "https://www.youtube.com/user/eggybounce"> My YouTube channel</a> is my platform to create engaging content and seek novel experiences. <br> <br> Whether it be chasing a supermoon or making a beat from items in my dorm room, I love to share my ideas and thought process for any project I take on.</p>
        </div>
        </div>
    </div>
<div class= "photo-container section">
  <div class = "photowrap">
  <a href="photo"><p>Photo Portfolio</p><img src = "../img/covers/photocover.jpg"></a>
</div>
</div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
<?php include ("footer.php"); ?>
<script src="../js/index.js"></script>
</html>
<!-- Testing /-->
