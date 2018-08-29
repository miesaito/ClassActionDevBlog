<?php get_header(); ?>
<div class="wrap blog">
  <div class="breadCrumb">
    <div class="breadCrumbHome"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">□</a></div>
    <div class="breadCrumbNow"><a href="<?php echo esc_url( home_url( '/list' ) ); ?>"></a>backnumber</div>
  </div>
  <div class="blogPage">
    <?php $the_query = new WP_Query('posts_per_page=5&paged='.$paged); ?>
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <ul>
      <li class="blogPageList"><a href="<?php the_permalink(); ?>">
          <h3 class="blogPageListTitle"><?php the_title(); ?></h3>
          <div class="blogPageListDate"><?php the_date("Y/m/d"); ?></div>
          <p class="blogPageListTxt">
            <?php
              $content  = get_the_content();
              $text     = strip_tags( strip_shortcodes( $content ) );
            ?>
            <?php echo $text; ?>
          </p></a></li>
    </ul><?php endwhile; ?>
    <?php endif; ?>
  </div><?php if(function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $the_query)); ?>
</div><?php get_footer(); ?>
<script>
  /* 100文字以下だったら…続きを見るを表示させる */
  var Txt = document.getElementsByClassName('blogPageListTxt');
  for(var i = 0; i < Txt.length; i++){
    if(Txt[i].innerHTML.length > 120){
      Txt[i].innerHTML = Txt[i].innerHTML.slice(0,121)+"…";
    }
  }
</script>