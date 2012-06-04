<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
            google.load("visualization", "1", {packages:["corechart"]});
            google.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['Quarter', 'Team 1', 'Team 2', 'Team 3'],
                ['Q1 2011',  14,      12,   25],
                ['Q2 2011',  28,      33,   55],
                ['Q3 2011',  44,      55,   75],
                ['Q4 2011',  47,      59,   87],
                ['Q1 2011',  58,      66,   95],
                ['Q2 2011',  77,      69,   105],
                ['Q3 2011',  85,      75,   186]
                ]);

                var options = {
                title: 'RFI Performance'
                };

                var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        </script>
</head>

<body>                 
        <?php $this->widget('bootstrap.widgets.BootNavbar', array(
    'fixed'=>false,
    'brand'=>'RapidRFI',
    'brandUrl'=>'http://www.computingforengineering.com',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.BootMenu',
            'items'=>array(
                array('label'=>'Dashboard', 'url'=>array('/site/index'), 'active'=>true),
                array('label'=>'Requests', 'url'=>'#', 'items'=>array(
                    array('label'=>'All requests', 'url'=>array('/request/index')),
                    array('label'=>'My Requests', 'url'=>array('/userRequest/index')),
                    '---',
                    array('label'=>'NEW REQUEST'),
                    array('label'=>'Commercially Confidential', 'url'=>'#'),
                    array('label'=>'Public Enquiry', 'url'=>'#'), 
                    array('label'=>'Information Request', 'url'=>'#')
                )),
            ),
        ),       
        array(
            'class'=>'bootstrap.widgets.BootMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(              
                array('label'=>Yii::app()->user->name, 'url'=>'#', 'items'=>array(
                    array('label'=>'Settings', 'url'=>'#'),
                    array('label'=>'Wiki', 'url'=>'#'),
                    array('label'=>'Manage Permissions', 'url'=>array('/rbam')),
                    '---',
                    array('label'=>'Logout', 'url'=>array('/site/logout')),
                )),
            ),
        ),
    ),
)); ?>	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.BootBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>