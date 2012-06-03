<?php
$this->breadcrumbs=array(
	'Requests'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Request','url'=>array('index')),
	array('label'=>'Create Request','url'=>array('create')),
	array('label'=>'Update Request','url'=>array('update','id'=>$model->rfi_id)),
	array('label'=>'Delete Request','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->rfi_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Request','url'=>array('admin')),
);
?>

<h1><?php echo $model->title; ?></h1>

<?php $this->widget('bootstrap.widgets.BootDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'rfi_id',		
		'originator',
		'body',
		'date_created',
	),
)); ?>
