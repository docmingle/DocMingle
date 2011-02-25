<?php
$this->breadcrumbs=array(
	'Commends'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Commends', 'url'=>array('index')),
	array('label'=>'Manage Commends', 'url'=>array('admin')),
);
?>

<h1>Create Commends</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>