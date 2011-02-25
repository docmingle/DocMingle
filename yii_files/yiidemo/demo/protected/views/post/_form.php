<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
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
        <span id="postingForm_captns2"><strong><a href="#">Add Category</a></strong></span>
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
      <div id="postingForm_captnsX">
        <!--<span id="postingForm_captns2">Acceptable formats are .jpg .png .gif and pdf upto 10 MP</span>--></div>
       <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
   </div>

   <div id="InApool">Include a Poll</div>

   <div id="left_middleBottom">

   <div id="postingForm_captnsBttm">
       Question text</div>
       <div id="postingForm_QstinPrvw">
         <div id="postingForm_QstinPrvw2">Question 1 Preview </div>
         <div id="qstion"></div>
         <div id="q"><img src="images/Q.jpg" width="69" height="69" /></div>
        <div id="postingForm_QstinPrvw2">Choose One :</div>
         <div id="qstion_radio">
           <label>
             <input type="radio" name="radio" id="radio" value="radio" />
           </label><br />
            <label>
             <input type="radio" name="radio" id="radio" value="radio" />
           </label>
         </div>
       </div>
       <div id="postingForm_TxTBttm">
         <textarea name="" cols="35" rows="4"></textarea>
       </div>

       <div id="postingForm_captnsBttm">
       Question type</div>

       <div id="postingForm_captnsBttm">
          <input name="" type="radio" value="" checked="checked" />
          <span id="spanRadio">Choose One </span>
          <input name="" type="radio" value="" />
           <span id="spanRadio">Check all that apply</span>
       </div>
       <div id="postingForm_TxTBttm2">
         <label>
           <input type="text" name="textfield" width="300" id="textfield" />
         </label>
       </div>

       <div id="postingForm_TxTBttm2">
         <label>
           <input type="text" name="textfield" width="300" id="textfield" />
         </label>
       </div>

       <div id="postingForm_captnsBttm"><span id="spanRadio"><a href="#">Add Answer +</a></span></div>

       <div id="postingForm_captnsBttm">
         <label>
           <input name="checkbox" type="checkbox" id="checkbox" checked="checked" />
         </label>
         <span style="font-weight:normal;">Allow
       respondents to provide their own answers</span></div>

   </div>

   <div id="left_middleBottom2">
      <div id="postingForm_captns">
        <label>
          <input type="submit" name="Add Question" id="Add Question" value="Add Question" />
        </label>
          <span style="font-weight:normal;">You can create a poll of up to 10 questions</span></div>
   </div>
  <?php $this->endWidget(); ?>