//Script do dark-mode
const $html = document.querySelector('html')
const $checkbox = document.querySelector('#switch')

$checkbox.addEventListener('change', function() {
    $html.classList.toggle('dark-mode')
})


jQuery(function(){
	jQuery('#loadMoreButton').on('click', function(){
		jQuery(this).hide();
		var offset = jQuery('.post-preview').length;
		jQuery.ajax({
			type:'POST',
			url:ajaxUrl,
			data:{action:'LoadMorePosts', offset:offset},
			success:function(html){
				jQuery('#loadMoreButton').show();
				if(html != ''){
					jQuery('.postscontent').append(html);
				} else{
					jQuery('#loadMoreButton').hide();
				}
				
			}
		});
	});
});