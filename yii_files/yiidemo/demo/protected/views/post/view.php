<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);

?>

<div id="viewHead">
    <div id="Postinghead_view" style="color:#FFF;"><?php echo$model->subject; ?></div>
    <div id="MYPostinghead_view">
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

      </div>
  </div>

<div id="main_middleBG_view">
     <div id="view_main">
         <div id="view_mainHead"><?php echo$model->subject; ?></div>
                  <div><?php echo$model->content; ?></div>
                 <div id="view_tag">Tag</div>
                  <div id="view_tags"> <u>hendrerit</u>, <u>semper</u>, <u>purus</u>, <u>ultricies</u>,<u>facilisis</u> </div>
                  <div id="view_postedBy">Posted on <?php echo $model->createdon; ?> by <strong>David Mathew.</strong></div>


         <div id="view_momment">Comments</div>
         <div id="commentsBg">
           <div id="comment_name">Ram<div id="view_cmmntedBy">Posted on 10 May 2011</div></div>
           Quisque consectetur semper eros sed blandit. Sed vitae tortor erat, sed tincidunt orci. In hac habitasse platea dictumst.
         </div>


        <div id="viewcomments">View older comments &gt;&gt;</div>

        <div id="view_momment">Add your comments</div>
        <form action="" method="get">
        <div id="viewcomments">
         <textarea name="" cols="55" rows="5" ></textarea>
         <input type="button" value="Add" />
        </div>
        </form>
     </div>
       <div id="right_divView">

 <div id="right_header">
 </div>

 <div id ="right_center">
 <div id ="answerheading">
 Submit your answer</div><br />
 <div id="qstnBG">Lorem ipsum dolor sit amet?</div>
 <div id="qstnsBG1">
 <form action="" method="get">
   <p>
     <label>
       <input name="radio" type="radio" id="radio" value="radio" checked="checked" />
       <strong>1.</strong> </label>
     Etiam vitae diam turpis, vel 
     ?

     <label>
       <input type="radio" name="radio" id="radio" value="radio" />
       <strong>2.</strong> </label>
     Sed sed quam in elit facilisis tincidunt
  <label>?<br />
    <input type="radio" name="radio" id="radio" value="radio" />
    <strong>3.</strong> Duis vulputate elit nec purus rutrum accumsan.  </label>
     ?

     <label>
       <br />
       <input type="radio" name="radio" id="radio" value="radio" />
       <strong>4.</strong> </label>
     Fusce vel velit augue, vel euismod libero?

     <label>
       <br />
       <input type="radio" name="radio" id="radio" value="radio" />
       <strong> 5.</strong></label>
     Cras pellentesque tincidunt est, a tempus ?
   </p>
   <p>
     <label>
       <input type="submit" name="button" id="button" value="Submit Answer" />
     </label>
   </p>
 </form>
 </div>

 <div style="height:600px;"></div>
 </div>

 <div id ="right_footer">

 </div>

 </div>
  </div>

