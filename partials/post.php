<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <?php /* Post title and datestamp */ ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <span class="datestamp"><?php the_time('F jS, Y'); ?></span><br>

  <?php /* Post content */ ?>
  <div class="post-content">
    <?php the_content(); ?>
  </div>

  <div class="post-metadata">
    <?php the_tags('Tags: ', ', ', '<br>'); ?>
    Posted in: <?php the_category(', ') ?><br>
    <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
  </div>
</div>
