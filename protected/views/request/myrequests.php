<?php
$this->breadcrumbs=array(
        'Requests'=>array('index'),
	'My Requests',
);

?>

<h1>My Requests</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
        'sortableAttributes'=>array(
            'date_raised'=>'Date Raised',
            'id'=>'Request Number',
        ),
)); ?>