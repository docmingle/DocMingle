<?php
$this->breadcrumbs=array(
	'Commends'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Commends', 'url'=>array('index')),
	array('label'=>'Create Commends', 'url'=>array('create')),
	array('label'=>'Update Commends', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Commends', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Commends', 'url'=>array('admin')),
);
?>

<h1>View Commends #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'post_id',
		'user_id',
		'commend',
		'postedon',
	),
)); ?>
