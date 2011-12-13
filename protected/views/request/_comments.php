<?php foreach($comments as $comment): ?>
<div class="comment" id="c<?php echo $comment->id; ?>">
        
        <div class="commenttop">
                <b><?php echo $comment->author0->username; ?> on <?php echo Yii::app()->dateFormatter->formatDateTime($comment->create_time, 'long', false); ?></b>
        </div>
      
        <div class="commentcontent">
                <?php echo nl2br(CHtml::encode($comment->content)); ?>
        </div>

</div><!-- comment -->
<?php endforeach; ?>