<?php
the_posts_pagination( array(
  'mid_size' => 5,
  'prev_text'          => __( '&lt;', 'twentyfifteen' ),
  'next_text'          => __( '&gt;', 'twentyfifteen' ),
  'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( ' ', 'twentyfifteen' ) . ' </span>',
  ) );
  ?>