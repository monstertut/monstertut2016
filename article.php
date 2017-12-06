    <div class="post">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <time><?php the_time('j F Y', '<time>', '</time>'); ?></time>
      
      <?php if(is_home() or is_archive()){
      $string = get_the_content();
      $trimmed = wp_trim_words( $string, $num_words = 30, $more = '...' );
      $cleancontent = strip_shortcodes( $trimmed );
      echo $cleancontent;

      } else {



$paragraphAfter= 1; //shows the ad after paragraph 1
$content = apply_filters('the_content', get_the_content());
$content = explode("</p>", $content);
for ($i = 0; $i <count($content); $i++) {
if ($i == $paragraphAfter) { ?>
<!-- START OF AD CODE -->
<p><script type="text/javascript"><!--
google_ad_client = "ca-pub-3904103307796909";
/* monstertut-content */
google_ad_slot = "4194666629";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></p>
<!-- END OF AD CODE -->
<?php
}
echo $content[$i] . "</p>";
}

}
      



      $cat = get_the_category_list( ', ' );
      if (is_single() or is_home()) { ?>
      <footer>Category: <?php echo $cat; ?></footer>
      <?php }
      ?>
    </div>