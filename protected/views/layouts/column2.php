<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="row">
        <div class="span3 offset 1">
            <div class="well">
                
                <?php $this->widget('bootstrap.widgets.BootMenu', array(
                    'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
                    'stacked'=>true, // whether this is a stacked menu
                    'items'=> $this->menu
                )); ?>
		             
            </div><!-- sidebar -->            
        </div>
        <div class="span8">
            <div id="content">
                <?php echo $content; ?>
            </div><!-- content -->
        </div>
            
    </div>		
</div>
<?php $this->endContent(); ?>