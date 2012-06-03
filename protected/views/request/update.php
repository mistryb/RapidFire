<?php
$this->breadcrumbs=array(
	'Requests'=>array('index'),
	$model->title=>array('view','id'=>$model->rfi_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Request','url'=>array('index')),
	array('label'=>'Create Request','url'=>array('create')),
	array('label'=>'View Request','url'=>array('view','id'=>$model->rfi_id)),
	array('label'=>'Manage Request','url'=>array('admin')),
);
?>

<h1>Update Request <?php echo $model->rfi_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>