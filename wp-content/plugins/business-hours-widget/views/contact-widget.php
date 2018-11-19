<!-- This file is used to markup the public-facing widget. -->
<?php $striptel = str_replace("-"," ",$instance['phone']);?>
<div class="footer-block">
  <div class="contact-info">
    <h3 class="contact-info-title">
      <?php echo $instance['title']; ?>
    </h3>
    <p><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $instance['email'];?>"><?php echo $instance['email']; ?></a></p>
    <p><i class="fa fa-phone"></i> <a href="tel:<?php echo $striptel?>"><?php echo $instance['phone']; ?></a></p>
    <p class="address"><i class="fa fa-map-marker"></i> <?php echo $instance['address']; ?></p>
    <p class="social-icons">
      <i class="fa fa-facebook-square"></i>
      <i class="fa fa-twitter-square"></i>
      <i class="fa fa-google-plus-square"></i>
    </p>
  </div>
</div>