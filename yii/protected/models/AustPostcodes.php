<?php

/**
 * This is the model class for table "aust_postcodes".
 *
 * The followings are the available columns in table 'aust_postcodes':
 * @property integer $id
 * @property integer $Pcode
 * @property string $Locality
 * @property string $State
 * @property string $Comments
 * @property string $DeliveryOffice
 * @property string $PresortIndicator
 * @property string $ParcelZone
 * @property string $BSPnumber
 * @property string $BSPname
 * @property string $Category
 */
class AustPostcodes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AustPostcodes the static model class
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
		return 'aust_postcodes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Pcode', 'numerical', 'integerOnly'=>true),
			array('Locality, Comments, DeliveryOffice', 'length', 'max'=>255),
			array('State, PresortIndicator, ParcelZone, BSPnumber, BSPname, Category', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Pcode, Locality, State, Comments, DeliveryOffice, PresortIndicator, ParcelZone, BSPnumber, BSPname, Category', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'Pcode' => 'Pcode',
			'Locality' => 'Locality',
			'State' => 'State',
			'Comments' => 'Comments',
			'DeliveryOffice' => 'Delivery Office',
			'PresortIndicator' => 'Presort Indicator',
			'ParcelZone' => 'Parcel Zone',
			'BSPnumber' => 'Bspnumber',
			'BSPname' => 'Bspname',
			'Category' => 'Category',
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
		$criteria->compare('Pcode',$this->Pcode);
		$criteria->compare('Locality',$this->Locality,true);
		$criteria->compare('State',$this->State,true);
		$criteria->compare('Comments',$this->Comments,true);
		$criteria->compare('DeliveryOffice',$this->DeliveryOffice,true);
		$criteria->compare('PresortIndicator',$this->PresortIndicator,true);
		$criteria->compare('ParcelZone',$this->ParcelZone,true);
		$criteria->compare('BSPnumber',$this->BSPnumber,true);
		$criteria->compare('BSPname',$this->BSPname,true);
		$criteria->compare('Category',$this->Category,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}