<?php

/**
 * This is the model class for table "trip".
 *
 * The followings are the available columns in table 'trip':
 * @property integer $id
 * @property string $departDate
 * @property string $arrivalDate
 * @property string $departTime
 * @property string $arrivalTime
 * @property string $departLocation
 * @property string $arrivalLocation
 * @property string $distance
 * @property string $vehicle
 * @property string $dutyType
 * @property string $departCity
 * @property string $departCityLat
 * @property string $departCityLng
 * @property string $destinationCity
 * @property string $destinationCityLat
 * @property string $destinationCityLng
 */
class Trip extends CActiveRecord
{

	public $id;
	public $departDate;
	public $arrivalDate;
	public $departTime;
	public $arrivalTime;
	public $departLocation;
	public $arrivalLocation;
	public $dutyType;
	public $vehicle;
	public $departCity;
	public $departCityLat;
	public $departCityLng;
	public $destinationCity;
	public $destinationCityLat;
	public $destinationCityLng;
	public $distance;
	/**
	 * Returns the static model of the specified AR class.
	 * @return Trip the static model class
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
		return 'trip';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('departDate, arrivalDate, departTime, arrivalTime, departLocation, arrivalLocation, distance, vehicle, dutyType, departCity, departCityLat, departCityLng, destinationCity, destinationCityLat, destinationCityLng', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, departDate, arrivalDate, departTime, arrivalTime, departLocation, arrivalLocation, distance, vehicle, dutyType, departCity, departCityLat, departCityLng, destinationCity, destinationCityLat, destinationCityLng', 'safe', 'on'=>'search'),
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
			'departDate' => 'Depart Date',
			'arrivalDate' => 'Arrival Date',
			'departTime' => 'Depart Time',
			'arrivalTime' => 'Arrival Time',
			'departLocation' => 'Depart Location',
			'arrivalLocation' => 'Arrival Location',
			'distance' => 'Distance',
			'vehicle' => 'Vehicle',
			'dutyType' => 'Duty Type',
			'departCity' => 'Depart City',
			'departCityLat' => 'Depart City Lat',
			'departCityLng' => 'Depart City Lng',
			'destinationCity' => 'Destination City',
			'destinationCityLat' => 'Destination City Lat',
			'destinationCityLng' => 'Destination City Lng',
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
		$criteria->compare('departDate',$this->departDate,true);
		$criteria->compare('arrivalDate',$this->arrivalDate,true);
		$criteria->compare('departTime',$this->departTime,true);
		$criteria->compare('arrivalTime',$this->arrivalTime,true);
		$criteria->compare('departLocation',$this->departLocation,true);
		$criteria->compare('arrivalLocation',$this->arrivalLocation,true);
		$criteria->compare('distance',$this->distance,true);
		$criteria->compare('vehicle',$this->vehicle,true);
		$criteria->compare('dutyType',$this->dutyType,true);
		$criteria->compare('departCity',$this->departCity,true);
		$criteria->compare('departCityLat',$this->departCityLat,true);
		$criteria->compare('departCityLng',$this->departCityLng,true);
		$criteria->compare('destinationCity',$this->destinationCity,true);
		$criteria->compare('destinationCityLat',$this->destinationCityLat,true);
		$criteria->compare('destinationCityLng',$this->destinationCityLng,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function claim()
	{
		if ($this->validate()) {
			$form = new Trip();
			$form->departDate = $this->departDate;
			$form->arrivalDate = $this->arrivalDate;
			$form->departTime = $this->departTime;
			$form->arrivalTime = $this->arrivalTime;
			$form->departLocation = $this->departLocation;
			$form->departCity = $this->departCity;
			$form->departCityLat = $this->departCityLat;
			$form->departCityLng = $this->departCityLng;
			$form->arrivalLocation = $this->arrivalLocation;
			$form->destinationCity = $this->destinationCity;
			$form->destinationCityLat = $this->destinationCityLat;
			$form->destinationCityLng = $this->destinationCityLng;
			$form->dutyType = $this->dutyType;
			$form->vehicle = $this->vehicle;
			$form->distance = $this->distance;
			$form->save();

			return true;
		} else {
			return false;
		}
	}
}