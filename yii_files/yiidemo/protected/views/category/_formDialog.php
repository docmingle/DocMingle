<div class="form" id="jobDialogForm">
 
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'category-form',
    'enableAjaxValidation'=>false,
)); 
//I have enableAjaxValidation set to true so i can validate on the fly the
?>
 
    <p class="note">Fields with <span class="required">*</span> are required.</p>
 
    <?php echo $form->errorSummary($model); ?>

 
    <div class="row">
        <?php echo $form->labelEx($model,'name'); ?>
        <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>90)); ?>
        <?php echo $form->error($model,'name'); ?>
    </div>
 
    <div class="row buttons">
        <?php echo CHtml::ajaxSubmitButton(Yii::t('category','Create category'),CHtml::normalizeUrl(array('category/addnew','render'=>false)),array('success'=>'js: function(data) {
                        $("#Post_category_id").append(data);
                        $("#jobDialog").dialog("close");
                    }'),array('id'=>'closeJobDialog')); ?>
    </div>
 
<?php $this->endWidget(); ?>
 
</div>