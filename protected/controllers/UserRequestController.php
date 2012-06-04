<?php

class UserRequestController extends Controller
{
        /**
        * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
        * using two-column layout. See 'protected/views/layouts/column2.php'.
        */
        public $layout='//layouts/column2';	
        
        public function actionIndex()
	{
             $dataProvider = new CActiveDataProvider('UserRequest', array(
                    'criteria'=>array(
                        'condition'=>'user_id='.Yii::app()->user->id,
                        'with'=>array('requestId'),
                        )                    
                    ));
                $this->render('index', array(
                    'dataProvider'=>$dataProvider,
                ));
		
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}