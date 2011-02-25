<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_id')); ?>:</b>
	<?php echo CHtml::encode($data->post_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commend')); ?>:</b>
	<?php echo CHtml::encode($data->commend); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postedon')); ?>:</b>
	<?php echo CHtml::encode($data->postedon); ?>
	<br />


</div>