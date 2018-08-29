
<?php
  $args = array (
    'prev_text'          => 'NEXT&gt;',
    'next_text'          => '&lt;PREV',
    'show_all'           => true,
  );
?>
<div class="pagination"></div><?php the_posts_pagination( $args ); ?>