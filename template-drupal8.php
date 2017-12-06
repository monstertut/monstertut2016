<?php
/* Template Name: Drupla 8 Cheat Sheet */
get_header(); ?>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="http://listjs.com/no-cdn/list.js"></script>
  <script src="http://listjs.com/no-cdn/list.fuzzysearch.js"></script>
  <script>
  //Developed by Giri Annamalai M 
//This is simple jquery plugin to copy the text inside a text box or textarea.
//Its simple code to starters who want to create jquery plugins on their own.
//Happy Coding!

$.fn.copyme = function() {
  $('span[id^="success-alert"]').remove();
  this.select();
  $(this).focus();
  document.execCommand("copy");
  document.getSelection().removeAllRanges();
  $(this).after('<span id="success-alert"><br>Copied to clipboard</span>');
  $('#success-alert').css( "color", "green" );
};
</script>



<style>


#test-list {
    font-family: Arial;
    font-size: 12px;
    line-height: 20px;
    margin: 50px 0 0;
    text-align: center;
}
.fuzzy-search {
    font-size: 22px;
    margin: 0 0 30px;
    padding: 10px 20px;
}
.entry {
    background: #ededed none repeat scroll 0 0;
    border-radius: 7px;
    display: block;
    margin: 0 auto 20px;
    padding: 10px;
    width: 75%;
}
.name {
    color: #333;
    font-family: Arial;
    font-size: 16px;
    margin: 6px 20px 13px;
    text-align: left;
}
textarea {
    padding: 10px;
    width: 93%;
    resize: vertical;
}
a {
    color: #6bb2ef;
}
.btn {
    background: #6bb2ef none repeat scroll 0 0;
    border: 0 none;
    color: #fff;
    cursor: pointer;
    display: block;
    margin: 3px auto;
    padding: 4px 7px;
}
h1 {
    color: #666;
    font-weight: 200;
    margin: 0 0 30px;
}


</style>
<br>
<center>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- drupal 8 cheat sheet -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3904103307796909"
     data-ad-slot="1085304092"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>

<br>



  <form action="">  <div id="test-list">
    <h1>Drual 8 Theming Cheat Sheet</h1>

    <input type="text" class="fuzzy-search" placeholder="type a keyword..." />
    <input type="reset" value="x">

    <div class="list">


  <?php 
    query_posts(array( 
        'post_type' => 'drupal_cs',
  'posts_per_page' => '-1'
          ) );  
      ?>
<?php while (have_posts()) : the_post(); ?>
       

      <div class="entry">
        <header class="name"><?php the_title(); ?></header>
        <textarea><?php the_field('code'); ?></textarea>
        <button class="btn btn-danger">Copy To Clipboard</button>
               <div class="note">
         <?php the_content(); ?>
        </div>
      </div>


<?php endwhile;?>
<?php wp_reset_query(); ?>

    </div>

  </div>
</form>

<script>
var monkeyList = new List('test-list', { 
  valueNames: ['name', 'note'], 
  plugins: [ ListFuzzySearch() ] 
});

$('textarea').click(function(){

  $('textarea').copyme();
});

$('button').click(function(){

  $(this).siblings('textarea').copyme();
});



</script>
<?php get_footer(); ?>