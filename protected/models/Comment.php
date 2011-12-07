<?php

/**
 * This is the model class for table "tbl_comment".
 *
 * The followings are the available columns in table 'tbl_comment':
 * @property integer $id
 * @property integer $author
 * @property string $content
 * @property integer $status
 * @property string $create_time
 * @property integer $request_id
 *
 * The followings are the available model relations:
 * @property Request $request
 * @property User $author0
 */
class Comment extends CActiveRecord
{
    
        const STATUS_PENDING=1;
        const STATUS_APPROVED=2;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Comment the static model class
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
		return 'tbl_comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content', 'required'),
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
			'request' => array(self::BELONGS_TO, 'Request', 'request_id'),
			'author0' => array(self::BELONGS_TO, 'User', 'author'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'author' => 'Author',
			'content' => 'Comment',
			'status' => 'Status',
			'create_time' => 'Create Time',
			'request_id' => 'Request Number',
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
		$criteria->compare('author',$this->author);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('request_id',$this->request_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        protected function beforeSave()
        {
            if(parent::beforeSave())
            {
                if($this->isNewRecord)
                {
                    $this->create_time=new CDbExpression('NOW()');
                    $this->author = Yii::app()->user->id;
                }
                return true;
            }
            else
                return false;
        }
}