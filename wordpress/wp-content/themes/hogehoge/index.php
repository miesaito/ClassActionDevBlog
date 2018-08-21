<?php get_header(); ?>
<div class="wrap outline">
  <div class="blogAbout">
    <?php $args = array('posts_per_page' => -1); ?>
    <?php $the_query = new WP_Query( $args ); ?>
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="blogAboutDate">
      <p class="blogAboutMonth"><?php echo get_post_time('M'); ?></p>
      <p class="blogAboutYear"><?php the_time('Y'); ?></p>
    </div>
    <ul>
      <li><a href="<?php the_permalink(); ?>">
          <h3 class="blogAboutTitle"><?php the_title(); ?></h3></a>
        <p class="blogAboutTxt">
          <?php
            $content  = get_the_content();
            $text     = strip_tags( strip_shortcodes( $content ) );
          ?>
          <?php echo $text; ?>
        </p><span class="blogAboutMore"><a href="<?php the_permalink(); ?>">…続きをみる</a></span>
      </li>
    </ul><?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<script>
  /* 100文字以下だったら…続きを見るを表示させる */
  var Txt = document.getElementsByClassName('blogAboutTxt');
  for(var i = 0; i < Txt.length; i++){
    if(Txt[i].innerHTML.length > 100){
      Txt[i].innerHTML = Txt[i].innerHTML.slice(0,101);
      var more = document.getElementsByClassName('blogAboutMore');
      more[i].style.display = 'block';
    }
    else{
      more[i].style.display = 'none';
    }
  }
  /* 同じ月だったら表示を消す */
  var a = document.getElementsByClassName('blogAboutDate');
  //- var b = a.innerHTML;
  var b = [];
  for(var j = 0; j < a.length; j++){
    b[j] = a[j].innerHTML;
  }
  var arry = b.filter(function (x, i, self) {
    return self.indexOf(x) === i;
  });
  console.log(arry);
  //- for(var k = 0; arry.length; k++){
  //-   return arry;
  //- }
</script>