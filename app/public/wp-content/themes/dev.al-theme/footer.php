

<footer class="go-travel-footer">
  <div class="top-footer container">
      <h1 class="logo-text">
        <a href="#"><strong class="go">Go</strong> Travel</a>
      </h1>
    <div class="top-footer-links">
    <ul class="header-links">
          <li>
            <a href="#"><?php
              wp_nav_menu(array(
                'theme_location' => 'footerMenuLocation'
               ));
              ?>
            </a>
          </li>
      </ul>
    </div>
  </div>
  <div class="bottom-footer container">
    <p>Copyright 2023 Avi</p>
    <div class="footer-socials">
    <ul class="footer-icons" >
    <i class="fa fa-brands fa-whatsapp"></i>
    <i class="fa fa-brands fa-instagram"></i>
    <i class="fa fa-brands fa-youtube"></i>
    <i class="fa fa-brands fa-reddit"></i>
      </ul>
    </div>
  </div>
</footer>


<?php wp_footer() ?>
</body>
</html>