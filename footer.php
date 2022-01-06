<!-- Suggestion -->
<div class="container">
            <div class="suggestion">
                <h2 class="">Qual é sua sugestão de conteúdo?</h2>
                <p>Que conteúdo você gostaria de ver por aqui?</p>
                <form action="" class="mb-5 form-suggestion">
                    <div class="form">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite seu nome">
                        <textarea class="form-control mt-2" id="exampleFormControlTextarea1" placeholder="Qual é sua sugestão?" rows="2"></textarea>
                        <a href="" class="btn btn-posts btn-suggestion mt-3">Enviar</a>
                    </div>    
                </form>
            </div>
        </div>


        <!-- Footer-->
        <footer class="pt-5 pb-2">
            <div class="icons text-center mb-4">
                <?php if(get_theme_mod('mt_facebook')): ?>
                    <a href="<?= get_theme_mod('mt_facebook') ?>"><i class="bi bi-facebook icons-arround"></i></a></i>
                <?php endif; ?>
                <?php if(get_theme_mod('mt_instagram')): ?>
                    <a href="<?= get_theme_mod('mt_instagram') ?>"><i class="bi bi-instagram icons-arround"></i></a></i>
                <?php endif; ?>
                <?php if(get_theme_mod('mt_youtube')): ?>
                    <a href="<?= get_theme_mod('mt_youtube') ?>"><i class="bi bi-youtube icons-arround"></i></a></i>
                <?php endif; ?>
                
            </div>
            <div class="container text-center">
                <p class="m-0 text-footer">Copyright &copy; Dev to Dev 2022. Feito com muito ♥ por <a href="">José Mateus</a> </p>
                <a href="" class="text-footer">Políticas de privacidade</a>
            </div>
        </footer>
        <script type="text/javascript">
            var ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
        </script>
        <?php wp_footer(); ?>
    </body>
</html>