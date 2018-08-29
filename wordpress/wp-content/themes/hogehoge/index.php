<?php get_header(); ?>
<div class="wrap outline">
  <div class="blogAbout">
    <?php // 投稿一覧に年と月の見出しを付ける
    $args = array(
    'posts_per_page' => -1, // 1ページに表示する最大投稿数を指定、-1は全てを表示
    'order' => 'DESC', // 降順でソート
    'orderby'=>'date' // 日付で並べる
    );
    $the_query = new WP_Query($args);
    if($the_query->have_posts()):
    $post_year = false; // 年の比較用変数の初期化
    $post_month = false; // 月の比較用変数の初期化
    while ($the_query->have_posts()): $the_query->the_post();
    if( $post_month != get_post_time('n') ) { // 比較の値と投稿月が異なる場合に以下を表示
    if ( $post_month !== false ) { // 比較の値と投稿月が異なる場合に以下を表示
    echo '</ul>';
    }
    echo '<div class="blogAboutDate">';
    // if ( $post_year != get_post_time('Y') ) { // 比較の値と投稿年が異なる場合に年を表示
    // echo '<p class="blogAboutMonth">'.get_post_time('M').'</p>'; //投稿の年を表示
    // }
    echo '<p class="blogAboutMonth">'.get_post_time('M').'</p>';
    echo '<p class="blogAboutYear">'.the_time('Y').'</p></div>'; //投稿の月を表示
    echo '<ul>';
    }
    $content  = get_the_content();
    $text     = strip_tags( strip_shortcodes( $content ) );
    echo '<li><h3 class="blogAboutTitle">'.get_the_title().'</h3>';
    echo '<p class="blogAboutTxt">'.$text.'</p><span class="blogAboutMore"><a href="'.get_the_permalink().'">…続きをみる</a></span>';
    echo '</li>'; // 投稿のリンクとタイトルを表示
    $post_year = get_post_time('Y'); // 年月の比較用の変数に今の投稿の年月を代入
    $post_month = get_post_time('n'); // 年月の比較用の変数に今の投稿の年月を代入
    endwhile;
    wp_reset_postdata();
    echo '</ul>';
    endif;
    ?>
  </div>
</div><?php get_footer(); ?>
<script>
  /* 100文字以下だったら…続きを見るを表示させる */
  var Txt = document.getElementsByClassName('blogAboutTxt');
  for(var i = 0; i < Txt.length; i++){
    if(Txt[i].innerHTML.length > 100){
      Txt[i].innerHTML = Txt[i].innerHTML.slice(0,101);
      var more = document.getElementsByClassName('blogAboutMore');
      more[i].style.display = 'inline';
    }
    //- else{
    //-   more[i].style.display = 'none';
    //- }
  }
</script>