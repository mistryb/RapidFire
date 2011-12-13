<div class="response" id="c<?php echo $response->id; ?>">       

    <p style="text-align: center;">
        This request was responded to by <b style="font-size: 20px;"><?php echo $response->author0->username; ?></b> on <b><?php echo Yii::app()->dateFormatter->formatDateTime($response->date_created, 'long', false); ?></b>. 
    </p>
        
        <div class="responsecontent">
                <?php echo nl2br(CHtml::decode($response->content)); ?>
        </div>

</div><!-- response -->

<?php echo Yii::app()->dateFormatter->formatDateTime($response->date_created, 'long', false); ?>