<?php

/**
 * This is the model class for table "tbl_request".
 *
 * The followings are the available columns in table 'tbl_request':
 * @property string $rfi_id
 * @property string $title
 * @property string $originator
 * @property string $body
 * @property string $date_created
 * @property integer $id
 */
class Request extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
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
			array('rfi_id, title, originator, body, date_created', 'required'),
			array('rfi_id, title, originator', 'length', 'max'=>256),
			array('body', 'length', 'max'=>1500),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rfi_id, title, originator, body, date_created, id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rfi_id' => 'RFI No.',
			'title' => 'Title',
			'originator' => 'Originator',
			'body' => 'Body',
			'date_created' => 'Date Created',
			'id' => 'ID',
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

		$criteria->compare('rfi_id',$this->rfi_id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('originator',$this->originator,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('id',$this->id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}