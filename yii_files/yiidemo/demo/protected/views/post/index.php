<div id="main_headBG">
   <div id="Postinghead"><font id="PostingheadSpan">All</font> Post</div>

 </div>
<div id="main_middleBG">
    <div id="list_head">
      <div id="list_title"><strong>Title</strong></div>
      <div id="list_mid"><strong>Status</strong></div>
      <div id="list_large"><strong>Category</strong></div>
      <div id="list_small"><strong>Age</strong></div>
      <div id="list_small"><strong>Votes</strong></div>
      <div id="list_mid"><strong>Comments</strong></div>
      <div id="list_large"><strong>Rating</strong></div>
    </div>
    <?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
    <div id="list_bottom"></div>
       
     </div>

    <div id="main_bottomBG">
    </div>

  </div>

