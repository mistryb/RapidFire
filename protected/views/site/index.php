<?php $this->pageTitle=Yii::app()->name; ?>

<?php 
    if(Yii::app()->user->isGuest)
    {
        ?>
<div class="loginform">
        <?php $this->widget('UserLogin',array('visible'=>Yii::app()->user->isGuest)); ?>
</div>
<?php
    }
    else
    {
    ?>
    
<div id="chart_div" style="width: 100%; height: 100%;"></div>


 
<?php } ?>

