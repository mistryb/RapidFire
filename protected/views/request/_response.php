<div class="response" id="c<?php echo $response->id; ?>">

        <?php echo CHtml::encode("#{$response->id}"); ?>

        <div class="author">
                <?php echo $response->author0->username; ?> says:
        </div>

        <div class="time">
                <?php echo $response->date_created; ?>
        </div>

        <div class="content">
                <?php echo nl2br(CHtml::encode($response->content)); ?>
        </div>

</div><!-- response -->