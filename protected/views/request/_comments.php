<?php foreach($comments as $comment): ?>
<div class="comment" id="c<?php echo $comment->id; ?>">

        <?php echo CHtml::encode("#{$comment->id}"); ?>

        <div class="author">
                <?php echo $comment->author0->username; ?> says:
        </div>

        <div class="time">
                <?php echo $comment->create_time; ?>
        </div>

        <div class="content">
                <?php echo nl2br(CHtml::encode($comment->content)); ?>
        </div>

</div><!-- comment -->
<?php endforeach; ?>