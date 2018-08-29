<?php get_header(); ?>
<div class="wrap outline">
  <div class="breadCrumb">
    <div class="breadCrumbHome"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">□</a></div>
    <div class="breadCrumbNow"><a href="<?php echo esc_url( home_url( '/list' ) ); ?>"></a>backnumber</div>
  </div>
  <div class="pageList">
    <?php $args = array('posts_per_page' => 5); ?>
    <?php $the_query = new WP_Query( $args ); ?>
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <ul>
      <li><a href="<?php the_permalink(); ?>">
          <h3 class="pageListTitle"><?php the_title(); ?></h3></a>
        <div class="pageListDate"><?php the_date("Y/m/d"); ?></div><a href="<?php the_permalink(); ?>">
          <p class="pageListTxt">
            <?php
              $content  = get_the_content();
              $text     = strip_tags( strip_shortcodes( $content ) );
            ?>
            <?php echo $text; ?>
          </p></a>
      </li>
    </ul><?php endwhile; ?>
    <?php endif; ?>
  </div><?php wp_pagenavi(); ?>
</div>
<script>
  /* 100文字以下だったら…続きを見るを表示させる */
  var Txt = document.getElementsByClassName('pageListTxt');
  for(var i = 0; i < Txt.length; i++){
    if(Txt[i].innerHTML.length > 100){
      Txt[i].innerHTML = Txt[i].innerHTML.slice(0,101)+"…";
    }
  }
</script>