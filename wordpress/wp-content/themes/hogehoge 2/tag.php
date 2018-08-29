
<?php
/*
Template Name: tag
*/
?>
<?php get_header(); ?>
<div class="wrap outline">
  <div class="breadCrumb">
    <div class="breadCrumbHome"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">□</a></div>
    <div class="breadCrumbAll"><a href="<?php echo home_url('/tagall'); ?>">TagAll</a></div>
    <div class="breadCrumbNow"><?php single_tag_title(); ?></div>
  </div>
  <div class="pageList">
    <?php
    $now_tag = single_tag_title('',false);
    $tag_properties = get_term_by('name', $now_tag, 'post_tag');
    $now_tag_slug = $tag_properties->slug;
    ?>
    <?php
    $arg   = array(
        'posts_per_page' => 5, // 表示する件数
        'orderby'        => 'date', // 日付でソート
        'order'          => 'DESC', // DESCで最新から表示、ASCで最古から表示
        'tag'            => $now_tag_slug // 表示したいタグのスラッグを指定
    );
    $posts = get_posts( $arg );
    if ( $posts ):
    ?>
    <ul>
      <?php
       foreach ( $posts as $post ) :
         setup_postdata( $post );
      ?>
      <li><a href="<?php the_permalink(); ?>">
          <h3 class="pageListTitle"></h3><?php the_title(); ?></a>
        <div class="pageListDate"><?php the_time( 'Y.m.d' ); ?></div><a href="<?php the_permalink(); ?>">
          <p class="pageListTxt">
            <?php
              $content  = get_the_content();
              $text     = strip_tags( strip_shortcodes( $content ) );
            ?>
            <?php echo $text; ?>
          </p></a>
      </li><?php endforeach; ?>
    </ul><?php
    endif;
    wp_reset_postdata();
    ?>
  </div><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
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