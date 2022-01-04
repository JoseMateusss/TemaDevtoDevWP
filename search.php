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
                                <input type="search" placeholder="O que você está procurando?" name="s" value="<?php the_search_query(); ?>">
                            </div>
                    </form> 
                     
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container container-index p-md-5">
            <div class="row">
                <h3 class="text-search-query">Resultados de pesquisa para: <?= get_search_query(); ?></h3>
                <!-- Blog entries-->
                <div class="col-lg-8 container-posts">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row gx-4 gx-lg-5">
                    <?php if(have_posts()):?>
                        <div class="postscontent">
                         <!-- Loop posts preview-->
                                <?php while(have_posts()):?>
                                  <?php the_post(); ?>
                                  <?php get_template_part('template_parts/post'); ?>
                                <?php endwhile; ?>
                        <!-- End loop posts preview -->        
                        </div>
                        <!-- Pager-->
                        <div class="justify-content-center">
                           <nav aria-label="Pagination" class="pagination">
                            <hr class="my-0">
                               
                                    <?php
                                    global $wp_query; 
                                    echo paginate_links(array(
                                    "current" => max(1, get_query_var('paged')),
                                    "total" => $wp_query->max_num_pages,
                                    "prev_text" => '<',
                                    "next_text" => '>'
                                )); 
                                ?>
                            
                            </nav> 
                        </div>
                            <?php else:?>
                                <p class="no-posts">Nenhum post foi encontrado referente a sua pesquisa :( </p></br><p class="no-posts">Você pode sugerir esse conteúdo para que possamos adicionar ele em nossa pauta de conteúdos :)</br></br> <a href="">Clique aqui para sugerir!</a></p>
                            <?php endif; ?>
                    </div>
                   
                   
                </div>
                
            <!-- Sidebar categories/tags-->
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            
            
            </div>
        </div>
<?php get_footer(); ?>