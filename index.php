<?php

// include header.php file
include 'parts/head.php';
include 'parts/flottant.php';
include 'parts/premier.php';
include 'parts/animation.php';
include 'parts/about.php';
include 'parts/editions.php';
include 'parts/projects.php';
include 'parts/team.php';
include 'parts/partners.php';
?>

</main>
<div class="sdg-banner">
  <img src="img/implementation.png" alt="">
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