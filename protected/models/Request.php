<?php

/**
 * This is the model class for table "tbl_request".
 *
 * The followings are the available columns in table 'tbl_request':
 * @property integer $id
 * @property string $raised_by
 * @property string $request_type
 * @property integer $assigned_to
 * @property string $query
 * @property string $date_raised
 * @property string $date_responded
 *
 * The followings are the available model relations:
 * @property User $assignedTo
 */
class Request extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Request the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, raised_by, request_type, assigned_to, query, date_raised', 'required'),
			array('id', 'unique'),
                        array('id, assigned_to', 'numerical', 'integerOnly'=>true),
			array('raised_by, request_type', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, raised_by, request_type, assigned_to, query, date_raised, date_responded', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'assignedTo' => array(self::BELONGS_TO, 'User', 'assigned_to'),
                        'comments' => array(self::HAS_MANY, 'Comment', 'request_id',
                            'condition'=>'comments.status='.Comment::STATUS_APPROVED,
                            'order'=>'comments.create_time DESC'),
                        'commentCount' => array(self::STAT, 'Comment', 'request_id',
                            'condition'=>'status='.Comment::STATUS_APPROVED),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'raised_by' => 'Raised By',
			'request_type' => 'Request Type',
			'assigned_to' => 'Assigned To',
			'query' => 'Query',
			'date_raised' => 'Date Raised',
			'date_responded' => 'Date Responded',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('raised_by',$this->raised_by,true);
		$criteria->compare('request_type',$this->request_type,true);
		$criteria->compare('assigned_to',$this->assigned_to);
		$criteria->compare('query',$this->query,true);
		$criteria->compare('date_raised',$this->date_raised,true);
		$criteria->compare('date_responded',$this->date_responded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public function addComment($comment)
        {
            if(Yii::app()->params['commentNeedApproval'])
                $comment->status=Comment::STATUS_PENDING;
            else
                $comment->status=Comment::STATUS_APPROVED;
            $comment->request_id=$this->id;
            return $comment->save();
        }
}