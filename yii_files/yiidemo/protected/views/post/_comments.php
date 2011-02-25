<div id="view_momment">Comments</div>
<?php foreach($comments as $comment):?>

         <div id="commentsBg">
           <div id="comment_name"><?php //echo User::model()->findAll('id='.$comment->user_id,'name');?>Admin<div id="view_cmmntedBy">Posted on <?php echo $comment->postedon; ?></div></div>
           <?php echo $comment->comment; ?>
         </div>
<!-- comment -->

<?php endforeach; ?>