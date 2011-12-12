<?php
$this->breadcrumbs=array(
	'Requests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Request', 'url'=>array('index')),
	array('label'=>'Create Request', 'url'=>array('create')),
	array('label'=>'Update Request', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Request', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Request', 'url'=>array('admin')),
);
?>

<h1>View Request #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'raised_by',
		'request_type',
		array(
                    'label'=>'Assigned To',
                    'type'=>'raw',
                    'value'=> CHtml::encode($model->assignedTo->username),
                ),
		'query',
                array(
                    'label'=>'Date Raised',
                    'type'=>'raw',
                    'value'=> Yii::app()->dateFormatter->formatDateTime(CHtml::encode($model->date_raised), 'medium', false)
                ),
	),
)); ?>

<div id="response">    
        <?php if ($model->response): ?>
    <h3> Response </h3>
    
        <?php $this->renderPartial('_response',array(
            'post'=>$model,
            'response'=>$model->response,
        )); ?>
    <?php else: ?>
    
    <h3>Create Your Response</h3>
 
    <?php if(Yii::app()->user->hasFlash('responseSubmitted')): ?>
        <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('responseSubmitted'); ?>
        </div>
    <?php else: ?>
        <?php $this->renderPartial('/response/_form',array(
            'model'=>$response,
        )); ?>
    <?php endif; ?>
    <?php endif; ?>
</div>

<div id="comments">
    <?php if($model->commentCount>=1): ?>
        <h3>
            <?php echo $model->commentCount . ' comment(s)'; ?>
        </h3>
 
        <?php $this->renderPartial('_comments',array(
            'post'=>$model,
            'comments'=>$model->comments,
        )); ?>
    <?php endif; ?>
    <h3>Leave a Comment</h3>
 
    <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
        <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
        </div>
    <?php else: ?>
        <?php $this->renderPartial('/comment/_form',array(
            'model'=>$comment,
        )); ?>
    <?php endif; ?>
</div>
