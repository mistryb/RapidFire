<?php
$this->breadcrumbs=array(
	'My Requests',
);?>
<?php

$this->menu=array(
	array('label'=>'Create Request','url'=>array('create')),
	array('label'=>'All Requests', 'url'=>array('/request/index')),                
);
?>

<h1>My Requests</h1>

<?php $this->widget('bootstrap.widgets.BootListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
