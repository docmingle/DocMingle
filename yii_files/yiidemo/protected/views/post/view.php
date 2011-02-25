<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->id,
);

?>

<div id="viewHead">
    <div id="Postinghead_view" style="color:#FFF;"><?php echo$model->subject; ?></div>
    <div id="MYPostinghead_view"><!--
      <div id="myposting">My Posting :</div> <div id="rating_imgs"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','<?php echo Yii::app()->request->baseUrl; ?>/images/staryellow_view.jpg',1)"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/starwhite_view.jpg" name="Image12" width="22" height="29" border="0" id="Image12" /></a>
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','<?php echo Yii::app()->request->baseUrl; ?>/images/staryellow_view.jpg',1)"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/starwhite_view.jpg" name="Image13" width="22" height="29" border="0" id="Image13" /></a>
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','<?php echo Yii::app()->request->baseUrl; ?>/images/staryellow_view.jpg',1)"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/starwhite_view.jpg" name="Image13" width="22" height="29" border="0" id="Image13" /></a>
        <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','<?php echo Yii::app()->request->baseUrl; ?>/images/staryellow_view.jpg',1)"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/starwhite_view.jpg" name="Image13" width="22" height="29" border="0" id="Image13" /></a>

        </div>
        <div id="myrating">Avg. Rating :</div>
         <div id="rating_imgs2">
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/staryellow_view.jpg" width="21" height="29" />
             <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/staryellow_view.jpg" width="21" height="29" />
              <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/staryellow_view.jpg" width="21" height="29" /> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/staryellow_view.jpg" width="21" height="29" />
         </div>
-->
      </div>
  </div>

<div id="main_middleBG_view">
     <div id="view_main">
         <div id="view_mainHead"><?php echo$model->subject; ?></div>
                  <div><?php echo$model->content; ?></div>
                 <div id="view_tag"><!--Tag--></div>
                  <!--<div id="view_tags"> <u>hendrerit</u>, <u>semper</u>, <u>purus</u>, <u>ultricies</u>,<u>facilisis</u> </div>-->
                  <div id="view_postedBy">Posted on <?php echo $model->createdon; ?> by <strong>David Mathew.</strong></div>

<?php $this->renderPartial('_comments',array(
			'post'=>$model,
			'comments'=>$model->comments,
		)); ?>
        <div id="viewcomments"><!--View older comments &gt;&gt;--></div>

        <div id="view_momment">Add your comments</div>
         <?php $this->renderPartial('/comment/_form1',array(
			'model'=>$comment,
		)); ?>
        
     </div>
       <?php $this->renderPartial('/question/_form1',array(
			'model'=>$question,
            'answers'=>$answer,
		)); ?>
  </div>

