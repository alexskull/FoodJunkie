<?php

/**
 * This is the model class for table "reserva".
 *
 * The followings are the available columns in table 'reserva':
 * @property integer $idReserva
 * @property string $Hora
 * @property integer $Cant_Personas
 * @property string $Fecha
 * @property string $Activa
 * @property integer $Usuario_User
 * @property integer $Local_idLocal
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioUser
 * @property Local $localIdLocal
 */
class Reserva extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reserva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Hora, Cant_Personas, Fecha, Local_idLocal', 'required'),
			array('Cant_Personas, Usuario_User, Local_idLocal', 'numerical', 'integerOnly'=>true),
			array('Activa', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idReserva, Hora, Cant_Personas, Fecha, Activa, Usuario_User, Local_idLocal', 'safe', 'on'=>'search'),
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
			'usuarioUser' => array(self::BELONGS_TO, 'Usuario', 'Usuario_User'),
			'localIdLocal' => array(self::BELONGS_TO, 'Local', 'Local_idLocal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idReserva' => 'Id Reserva',
			'Hora' => 'Hora',
			'Cant_Personas' => 'Personas',
			'Fecha' => 'Fecha',
			'Activa' => 'Estado',
			'Usuario_User' => 'Usuario User',
			'Local_idLocal' => 'Local Id Local',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idReserva',$this->idReserva);
		$criteria->compare('Hora',$this->Hora,true);
		$criteria->compare('Cant_Personas',$this->Cant_Personas);
		$criteria->compare('Fecha',$this->Fecha,true);
		$criteria->compare('Activa',$this->Activa,true);
		$criteria->compare('Usuario_User',$this->Usuario_User);
		$criteria->compare('Local_idLocal',$this->Local_idLocal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reserva the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
