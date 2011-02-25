<?php
$this->breadcrumbs=array(
	'Commends'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Commends', 'url'=>array('index')),
	array('label'=>'Create Commends', 'url'=>array('create')),
	array('label'=>'View Commends', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Commends', 'url'=>array('admin')),
);
?>

<h1>Update Commends <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>