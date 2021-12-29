<div class="post-preview">
    <a href="<?php the_permalink(); ?>">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
    </a>
    <h4 class="post-meta text-muted fst-italic">
        Postado por
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
        <?php echo get_the_date();?>
    </h4>
</div>
<!-- Divider-->
<hr class="my-4">