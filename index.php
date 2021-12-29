<?php get_header(); ?>
<!-- Page header with logo and tagline-->
    <!-- Page header with logo and tagline-->
        <header class="py-2 border-bottom mb-4 header-index">
            <div class="container">
                <div class="text-center title-header my-5">
                    <h1 class="fw-bolder">Dev to Dev</h1>
                    <p class="lead mb-0">De desenvolvedores para desenvolvedores</p>
                     
                    <form action="" class="mt-4 form-main">
                        <div class="input-group form-search mg-search flex-nowrap">
                            <input type="text" class="form-control form-search" placeholder="O que você está procurando?" aria-label="O que você está procurando?" aria-describedby="addon-wrapping">
                            <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search"></i></span>
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