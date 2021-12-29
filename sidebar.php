<div class="col-lg-4">
	<!-- Categories-->
	<div class="card mb-4">
		<div class="card-body">
	        <h5 class="card-title">Categorias</h5>
	    </div>
	    <ul class="list-group list-group-flush">
	    	<?php foreach ( get_categories() as $category ) : ?>
	        	<li class="list-group-item"><a href="<?= get_category_link($category->term_id); ?>"><?= $category->name;?> [<?= $category->count;?>]</a></li>
	        <?php endforeach;  ?>
	    </ul>
	</div> 
 	<!-- Side widget-->
	<div class="card mb-4">
	    <div class="card-body">
	        <h5 class="card-title">Tags</h5>
	        <?php foreach ( get_tags() as $tag ) : ?>
	        	<a href="<?= get_category_link($tag->term_id); ?>" class="card-link"><?= $tag->name;?></a>
	        <?php endforeach;  ?>
	    </div>
	</div>   
</div>                 