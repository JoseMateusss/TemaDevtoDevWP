//Script do dark-mode
let nome = 'theme';
let valor = 'dark';
let local = 'path=/';
let validade = new Date();

validade.setTime(+ validade + (365 * 86400000));

jQuery('#switch').on('change', function(){
	if(jQuery(this).is(':checked')){
		jQuery(this).attr('value', 'true');
		document.cookie = nome + '=' + valor + "; expires=" + validade.toGMTString() + '; '+local;
		const $html = document.querySelector('html');
		$html.classList.toggle('dark-mode');
		
	} else {
		jQuery(this).attr('value', 'false');
		document.cookie = nome + '=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
		const $html = document.querySelector('html');
		$html.classList.toggle('dark-mode');
	}
});

// const $html = document.querySelector('html')
// const $checkbox = document.querySelector('#switch')

// $checkbox.addEventListener('change', function() {
//     $html.classList.toggle('dark-mode')
// })


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