<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>true,
)); ?>
   <div id="left_middle">

      <div id="postingForm_head">Basic Informations  </div>
      <div id="postingForm_requird">These fields are required <span style="color:#F00;">*</span></div>
<?php echo $form->errorSummary($model); ?>
      <div id="postingForm_captns">
       Title<span id="postingForm_rqurd">*</span><span id="postingForm_captns2">Descriptive titles help colleagues find your post.</span></div>

      <div id="postingForm_TxT1">
          <?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>200)); ?>
          <?php echo $form->error($model,'subject'); ?>
      </div>

      <div id="postingForm_captns">
        Body<span id="postingForm_rqurd">*</span><span id="postingForm_captns2">Enter thecontent of your post here.</span>
       </div>

       <div id="postingForm_TxT2">
        <?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
      </div>

      <div id="postingForm_captns">
        Categories<span id="postingForm_rqurd">*</span>
       </div>

       <div id="postingForm_TxT1">
               <?php echo $form->dropDownList($model,'category_id', CHtml::listData(Category::model()->findAll(), 'id', 'name')); ?>
		<?php echo $form->error($model,'category_id'); ?>
        
            <?php /*echo CHtml::ajaxLink(Yii::t('job','Add Category'),$this->createUrl('category/addnew'),array(
        'onclick'=>'$("#jobDialog").dialog("open"); return false;',
        'update'=>'#jobDialog'
        ),array('id'=>'showJobDialog'));*/?>
    <div id="jobDialog"></div>
      </div>
       <div id="submitpost">
       
           </div>
<?php /*
      <div id="postingForm_captns">
        Add attachments (upto 10)
       </div>

       <div id="postingForm_TxT3">
        <input name="" type="text"  width="280"/>
        <span id="postingForm_captns2">
          <input name="" type="button" value="Browse" />
        </span>
      </div>

        <div id="postingForm_captns4">Attached Files:</div>
 */?>
      <div id="postingForm_captnsX" >
        <!--<span id="postingForm_captns2">Acceptable formats are .jpg .png .gif and pdf upto 10 MP</span>--></div>

   </div>

   <div id="InApool"><!--<a href="javascript:void(0);" onclick="document.getElementById('left_middleBottom').style.display = 'block';document.getElementById('post_havequestion').value='1';"> </a>-->Include a Poll</div>
<input type="hidden" value="1" name="Post[havequestion]" id="post_havequestion">
   <div id="left_middleBottom" style="display:block;">
<script type="text/javascript" >
    function showPreview(giver,taker)
    {
        document.getElementById(taker).innerHTML=document.getElementById(giver).value;
    }
    function changeFields(value)
    {
        if (value=='check')
        {
            document.getElementById('option1').innerHTML='<input type="checkbox" id="check_option1" >';
            document.getElementById('option2').innerHTML='<input type="checkbox" id="check_option2" >';
            document.getElementById('option3').innerHTML='<input type="checkbox" id="check_option3" >';
            document.getElementById('chk_opt').innerHTML="Check all that apply";
        }
        else
        {
            document.getElementById('option1').innerHTML='<input type="radio" name="radio" id="radio" value="radio" />';
            document.getElementById('option2').innerHTML='<input type="radio" name="radio" id="radio" value="radio" />';
            document.getElementById('option3').innerHTML='<input type="radio" name="radio" id="radio" value="radio" />';
            document.getElementById('chk_opt').innerHTML="Choose One";
        }

    }
</script>
   <div id="postingForm_captnsBttm">
       Question text</div>
       <div id="postingForm_QstinPrvw">
         <div id="postingForm_QstinPrvw2">Question Preview </div>
         <div id="qstion"></div>
         <div id="q"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Q.jpg" width="69" height="69" /></div>
        <div id="postingForm_QstinPrvw2" ><span id="chk_opt">Choose One :</span></div>
         <div id="qstion_radio">
           <label id="option1">
             <input type="radio" name="radio" id="radio" value="radio" />
           </label><span id="prev_answer1"></span><br />
            <label id="option2">
             <input type="radio" name="radio" id="radio" value="radio" />
           </label><span id="prev_answer2"></span><br />
            <label id="option3">
             <input type="radio" name="radio" id="radio" value="radio" />
           </label><span id="prev_answer3"></span>
         </div>
       </div>
       <div id="postingForm_TxTBttm">
         <textarea name="Post[question]" cols="35" rows="4" id="post_question" onkeypress="showPreview('post_question','qstion');" onblur="showPreview('post_question','qstion');"></textarea>
       </div>

       <div id="postingForm_captnsBttm">
       Question type</div>

       <div id="postingForm_captnsBttm">
          <input name="Post[type]" type="radio" value="radio" checked="checked" id="post_type" onchange="changeFields(this.value)" />
          <span id="spanRadio">Choose One </span>
          <input name="Post[type]" type="radio" value="check" id="post_type"  onchange="changeFields(this.value)" />
           <span id="spanRadio">Check all that apply</span>
       </div>
       <div id="postingForm_TxTBttm2">
         <label>
           <input type="text" name="Post[answer1]" id="post_answer1" width="300" onkeypress="showPreview('post_answer1','prev_answer1');"  onblur="showPreview('post_answer1','prev_answer1');" />
         </label>
       </div>

       <div id="postingForm_TxTBttm2">
         <label>
           <input type="text" name="Post[answer2]" id="post_answer2" width="300" onkeypress="showPreview('post_answer2','prev_answer2');" onblur="showPreview('post_answer2','prev_answer2');" />
         </label>
       </div>
       <div id="postingForm_TxTBttm2">
         <label>
           <input type="text" name="Post[answer3]" id="post_answer3" width="300" onkeypress="showPreview('post_answer3','prev_answer3');" onblur="showPreview('post_answer3','prev_answer3');" />
         </label>
       </div>
       <div id="postingForm_captnsBttm"><span id="spanRadio"><!--<a href="#">Add Answer +</a>--></span></div>

       <div id="postingForm_captnsBttm"><!--
         <label>
           <input name="checkbox" type="checkbox" id="checkbox" checked="checked" />
         </label>
         <span style="font-weight:normal;">Allow
       respondents to provide their own answers</span>--></div>

   </div>

   <div id="left_middleBottom2">
      <div id="postingForm_captns"><?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        <!--<label>
          <input type="submit" name="Add Question" id="Add Question" value="Add Question" />
        </label>
          <span style="font-weight:normal;">You can create a poll of up to 10 questions</span>--></div>
   </div>
  <?php $this->endWidget(); ?>