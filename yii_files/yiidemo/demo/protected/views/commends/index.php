<?php
$this->breadcrumbs=array(
	'Commends',
);

$this->menu=array(
	array('label'=>'Create Commends', 'url'=>array('create')),
	array('label'=>'Manage Commends', 'url'=>array('admin')),
);
?>

<h1>Commends</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
