<?php
comment_form(array(
    'comment_field' => '<div class="form-group">
    <label for="exampleFormControlTextarea1">Comentário*:</label>
    <textarea class="form-control text-align-left" id="exampleFormControlTextarea1" name="comment" rows="3"></textarea>
  </div>',
  'fields' => array(
      'author' =>'<div class="form-group">
      <label for="exampleFormControlInput1">Nome*:</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="author">
    </div>',
      'email'  => '<div class="form-group">
      <label for="exampleFormControlInput2">Email*:</label>
      <input type="text" class="form-control" id="exampleFormControlInput2" name="email">
    </div>',
      'url'    => '<div class="form-group">
      <label for="exampleFormControlInput3">Seu site (github, linkedin, instagram):</label>
      <input type="text" class="form-control" id="exampleFormControlInput3" name="url">
    </div>'
  )
));
if(post_password_required()){
    return;
}

if(have_comments()){
    foreach($comments as $comment){
?>
<div class="comment d-flex mt-5 pb-2">
    <div class="comment_avatar mr-5">
        <?php echo get_avatar($comment, 60); ?>
    </div>
    <div class="comment_area" style="margin-left:10px;">
        <strong><?php comment_author(); ?></strong> - <span class="fst-italic"><?php comment_date(); ?></span></br>
        <?php comment_text(); ?>
    </div>
</div>
<?php
    }
} 
?>

