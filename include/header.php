<header class="fixed-top">
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="" class="w-50">
      </a>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5">
          <li class="nav-item dropdown <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo "active";} ?>">
            <a class="nav-link dropdown-toggle" href="index.php"  data-bs-toggle="dropdown" aria-expanded="true">
              Home
            </a>
            <ul class="dropdown-menu <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){echo "show";} ?>">
              <!-- <li><a class="dropdown-item" href="#">Our Services</a></li> -->
              <li><a class="dropdown-item" href="#"><span class="line line-1"></span> How We Help</a></li>
              <li><a class="dropdown-item" href="#"><span class="line line-2"></span> Who We Work With</a></li>
              <li><a class="dropdown-item" href="#"><span class="line line-3"></span> What We Do</a></li>
              <li><a class="dropdown-item" href="#"><span class="line line-4"></span> Join the Movement</a></li>
            </ul> 
          </li>
          <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'])=="what-we-do.php"){echo "active";} ?>">
            <a class="nav-link" href="what-we-do.php">What We Do</a>
          </li>
          <li class="nav-item dropdown <?php if(basename($_SERVER['PHP_SELF'])=="about.php"){echo "active";} ?>">
            <a class="nav-link dropdown-toggle" href="about.php"  data-bs-toggle="dropdown" aria-expanded="false">
              About Us
            </a>
            <ul class="dropdown-menu <?php if(basename($_SERVER['PHP_SELF'])=="about.php"){echo "show";} ?>">
              <li><a class="dropdown-item" href="#"><span class="line line-5"></span> Our Story</a></li>
              <li><a class="dropdown-item" href="#"><span class="line line-6"></span> Our Purpose</a></li>
              <li><a class="dropdown-item" href="#"><span class="line line-7"></span> Meet the Team</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown <?php if(basename($_SERVER['PHP_SELF'])=="careers.php"){echo "active";} ?>">
            <a class="nav-link dropdown-toggle" href="careers.php"  data-bs-toggle="dropdown" aria-expanded="false">
            Careers
            </a>
            <ul class="dropdown-menu <?php if(basename($_SERVER['PHP_SELF'])=="careers.php"){echo "show";} ?>">
              <li><a class="dropdown-item" href="#"><span class="line line-8"></span> Careers</a></li>
              <li><a class="dropdown-item" href="#"><span class="line line-9"></span> Why Join the Team</a></li>
              <li><a class="dropdown-item" href="#"><span class="line line-10"></span> Get to Know Us</a></li>
              <li><a class="dropdown-item" href="#"><span class="line line-11"></span> Purpose</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown <?php if(basename($_SERVER['PHP_SELF'])=="contact.php"){echo "active";} ?>">
            <a class="nav-link dropdown-toggle" href="contact.php"  data-bs-toggle="dropdown" aria-expanded="false">
            Contact Us
            </a>
            <ul class="dropdown-menu <?php if(basename($_SERVER['PHP_SELF'])=="contact.php"){echo "show";} ?>">
              <li><a class="dropdown-item" href="#"><span class="line line-12"></span> Office Locations</a></li>
              <li><a class="dropdown-item" href="#"><span class="line line-13"></span> Contact Us</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<div class="fix-head"></div>

<div class="floating">
  <ul>
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
  </ul>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var menuItems = document.querySelectorAll('.navbar-nav .nav-item');
    menuItems.forEach(function (menuItem) {
      menuItem.addEventListener('click', function () {
        var menuLink = menuItem.querySelector('.nav-link');
        var href = menuLink.getAttribute('href');
        if (href && href !== "#") {
          window.location.href = href;
        }
      });
    });
  });
</script>

