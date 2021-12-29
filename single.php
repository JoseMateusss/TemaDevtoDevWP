<?php get_header(); ?>


    	 <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): ?>
                            <?php the_post(); ?>
                    <!-- Post content-->
                    <article style="margin-top: 50px;">
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="title-post mb-1"><?php the_title(); ?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-0">Postado em <?php echo the_date(); ?> por <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></div>
                            <!-- Post categories-->
                            <div class="categories-single">
                                <?php the_category(' | '); ?>
                            </div>
                            
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url($post->id, 'full'); ?>" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5 content-single">
                            <?php the_content();?>
                        </section>
                    </article>
                    <!-- Posts related section-->
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <!-- Side widgets-->
                <div class="col-lg-4 sidebar-single">
                    <?php get_sidebar(); ?>
                </div>
                
            </div>
        </div>


	

<?php get_footer(); ?>