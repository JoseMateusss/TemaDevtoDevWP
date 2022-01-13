<?php get_header(); ?>
<!-- Page header with logo and tagline-->
    <!-- Page header with logo and tagline-->
        <header class="py-2 border-bottom mb-4 header-index">
            <div class="container">
                <div class="text-center title-header my-5">
                    <h1 class="fw-bolder">Dev to Dev</h1>
                    <p class="lead mb-0">De desenvolvedores para desenvolvedores</p>
                     <form role="search" method="GET"  action="<?= esc_url(home_url('/'));?>" class="mt-4 form-main search-form">
                           <div class="box"> 
                                <i class="bi bi-search"></i>
                                <input type="search" class="search-text-center" placeholder="O que você está procurando?" name="s" value="<?php the_search_query(); ?>">
                            </div>
                    </form> 
                     
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container container-index p-md-5">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8 container-posts">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row gx-4 gx-lg-5">
                        <div class="postscontent">
                         <!-- Loop posts preview-->
                            <?php if(have_posts()):?>
                                <?php while(have_posts()):?>
                                  <?php the_post(); ?>
                                  <?php get_template_part('template_parts/post'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <!-- End loop posts preview -->
                        </div>
                        <!-- Pager-->
                        <div class="d-flex justify-content-center mb-5"><a class="btn btn-posts text-uppercase" id="loadMoreButton">Carregar mais posts</a></div>
                        
                    </div>
                   
                   
                </div>
                
            <!-- Sidebar categories/tags-->
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            
            
            </div>
        </div>
<?php get_footer(); ?>