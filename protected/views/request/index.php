<?php
$this->breadcrumbs=array(
	'Requests',
);

$this->menu=array(
	array('label'=>'Create Request', 'url'=>array('create')),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
?>

<?php $this->widget('bootstrap.widgets.BootGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$dataProvider,
    'template'=>"{items}",
    'columns'=>array(
        array('name'=>'id', 'header'=>'#'),
        array('name'=>'date_raised', 'header'=>'Date Raised'),
        array('name'=>'raised_by', 'header'=>'Raised By'),
        array('name'=>'request_type', 'header'=>'Request Type'),
        array('name'=>'commentCount', 'header'=>'Comments'),        
        array(
            'class'=>'bootstrap.widgets.BootButtonColumn',
            'htmlOptions'=>array('style'=>'width: 50px'),
        ),
    ),
)); ?>
