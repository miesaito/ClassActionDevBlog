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
          
          <?php if(mb_strlen($text) > 100): ?>
          <?php $text = mb_substr($text, 0, 100); ?>
          <?php echo $text; ?>
          <div class="blogAboutMore"><a href="<?php the_permalink(); ?>">…続きをみる</a></div><?php else: ?>
          <?php echo $text; ?>
          <?php endif; ?>
        </p>
      </li>
    </ul><?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
<script></script>