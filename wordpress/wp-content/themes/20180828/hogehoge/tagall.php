
<?php
/*
Template Name: tagall
*/
?>
<?php get_header(); ?>
<div class="wrap outline">
  <?php
  $posttags = get_tags();
  if ($posttags) {
  foreach($posttags as $tag) {
  echo '<div class="blogTag"><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></div>';
  }
  }
  ?>
</div>