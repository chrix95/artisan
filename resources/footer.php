<footer class="footer">
  <div class="container">
    <nav class="pull-left">
      <ul>
        <li>
          <a href="index.php">
            aRTISAN
          </a>
        </li>
        <li>
          <a href="about.php">
            About Us
          </a>
        </li>
        <li>
          <a href="404.php">
            Blog
          </a>
        </li>
        <li>
          <a href="contact.php">
            Contact
          </a>
        </li>
      </ul>
    </nav>
    <div class="copyright pull-right">
      &copy; <?php echo date('Y'); ?> Copyright. All Rights are reserved.
    </div>
  </div>
</footer>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="assets/js/material-kit.js" type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready(function (){
    $("#findBut").click(function(){
      console.log("clicked2");
    });
  });
</script>

</html>
