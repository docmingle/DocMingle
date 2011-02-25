<div id="right_divView">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'question-form',
	'enableAjaxValidation'=>true,
)); ?>
 <div id="right_header">
 </div>

 <div id ="right_center">
 <div id ="answerheading">
 Submit your answer</div><br />
 <div id="qstnBG"><?php echo $model->question; ?></div>
 <div id="qstnsBG1">
     <?php $i=1; foreach($answers as $answer):?>
   <p>
     <label>
         <?php if ($model->type=='radio'){?>
       <input name="answer" type="radio" id="answer" value="<?php echo $answer->answer;?> "  />
        <?php }else{?>
         <input name="answer<?php echo $i;?>" type="checkbox" id="answer<?php echo $i;?>" value="<?php echo $answer->answer;?> "  />
         <?php }?>
       <strong><?php echo $i;?>.</strong> </label>
     <?php echo $answer->answer;?>

         <?php $i++; endforeach; ?>
     <br/>
     <label>
       <?php echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Submit Answer'); ?>
     </label>
   </p>
 </div>

 <div style="height:600px;"></div>
 </div>

 <div id ="right_footer">

 </div>

 </div>
    <?php $this->endWidget(); ?>