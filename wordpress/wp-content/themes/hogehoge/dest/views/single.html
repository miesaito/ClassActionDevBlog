<?php get_header(); ?>
<div class="blogAbout nav">
  <div class="main">
    <div class="TitleArea">
      <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
      <h1 class="blogTitle"><?php the_title(); ?></h1>
      <div class="postDate"><span class="postDateDay"><?php the_time('Y/m/d'); ?></span>公開
        <?php
        $posttags = get_the_tags();
        if ($posttags) {
        foreach($posttags as $tag) {
        echo '<div class="clipTag"><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></div>';
        }
        }
        ?>
      </div>
    </div>
    <div class="blogContents">
      <?php echo get_the_post_thumbnail(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="backnumber">
      <div class="backnumberTitle">
        バックナンバー
        <?php $args = array('posts_per_page' => 5); ?>
        <?php $the_query = new WP_Query( $args ); ?>
        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?><a href="<?php the_permalink(); ?>">
          <div class="backnumberColumn">
            <figure class="columnImg"><?php echo get_the_post_thumbnail(); ?></figure>
            <div class="columnContents">
              <div class="columnTitle"><?php the_title(); ?></div>
              <div class="columnDate"><?php the_time('Y/m/d'); ?></div>
            </div>
          </div></a><?php endwhile; ?>
        <?php endif; ?>
      </div><a href="<?php echo home_url('/list'); ?>">
        <div class="backnumberMore">もっとみる</div></a>
    </div>
  </div>
</div>
<script>
  /* 100文字以下だったら…続きを見るを表示させる */
  var Txt = document.getElementsByClassName('columnTitle');
  for(var i = 0; i < Txt.length; i++){
    if(Txt[i].innerHTML.length > 30){
      Txt[i].innerHTML = Txt[i].innerHTML.slice(0,31)+"…";
    }
  }
</script>