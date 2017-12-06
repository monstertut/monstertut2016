        <footer id="footer">
          <div class="row column">
            &copy; <?php echo date("Y") ?> monstertut.com
          </div>
        </footer>


        <div id="editthispage">
  <?php if ( is_user_logged_in() ) {
    edit_post_link('Edit this page');
  } ?> 
</div>

        <script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/bower_components/what-input/what-input.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/bower_components/foundation-sites/dist/foundation.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/min/app-min.js"></script>


        <script>
  (function() {
    var cx = '000768293113235786575:mfhrff27dek';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>




      </body>
      </html>