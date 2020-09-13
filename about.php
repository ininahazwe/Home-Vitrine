<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,700;0,800;0,900;1,400&display=swap" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js" integrity="sha512-pCPP9sfLW9T7EZiw725jUl+ux032sjGhFE+ZAx00C1iO55ZmZJWpfNGbDf2ZF5b0UqxRqSW548PbZEWmH+S7pA==" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <title>Home Association</title>
</head>

<body>
  <?php
  include('parts/menu.php');
  ?>

  <main>
    <div class="head-about">
      <div class="about-textes">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Founded in Paris, France, Home Association is a volunteer-based organization that focuses on the digitization of educational strategies through project-based activities. While traditional pedagogy focuses on a lecturer and student audience, our motivation stems from creating interactive, collaborative and communities to understand theories and concepts through practice.</p>
        <p>Home team is composed of students and staff members from CRI-Paris who come from different cultural and educational backgrounds.</p>
      </div>
      <div class="about-illustration">
        <img src="img/swingvy.png" alt="">
      </div>
    </div>

    <?php
    // include footer
    include('parts/footer.php');
    ?>

</body>
<script>
  gsap.from('.logo', {
    duration: 1,
    ease: "power2. out",
    y: -60
  });
  gsap.from('.navbar-menu', {
    duration: 0.6,
    ease: "power2. out",
    y: -60
  });
  gsap.from('.donate', {
    duration: 1,
    ease: "power2. out",
    opacity: 0,
    delay: 1.2
  });
  gsap.from('.principal', {
    duration: 1,
    ease: "power2. out",
    opacity: 0,
    delay: 1.2
  });
  gsap.from('.kigali', {
    duration: 1.5,
    ease: "power2. out",
    opacity: 0,
    delay: 2
  });
  gsap.from('.hashtag', {
    duration: 2,
    ease: "power2. out",
    opacity: 0,
    delay: 2.5
  });
  gsap.from('.apply', {
    duration: 2,
    ease: "power2. out",
    opacity: 0,
    delay: 3
  });
  gsap.from('.cubes-container', {
    duration: 3,
    ease: "power2. out",
    opacity: 0,
    delay: 4,
    y: 60
  });
</script>

<script src="js/jquery.min.js"></script>
<script src="js/animatedModal.js"></script>
<script src="js/rellax.min.js"></script>
<script src="js/cube.js"></script>
<script src="js/accordeon.js"></script>
<script src="js/menu.js"></script>

</html>