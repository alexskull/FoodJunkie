<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $idCliente
 * @property string $Nombre
 * @property string $Apellido
 * @property string $Email
 * @property string $FechaNacimiento
 * @property string $Direccion
 * @property string $Foto
 * @property string $Telefono
 * @property string $Celular
 * @property integer $Usuario_User
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioUser
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Apellido', 'required'),
			array('Usuario_User', 'numerical', 'integerOnly'=>true),
			array('Nombre, Apellido, Email', 'length', 'max'=>25),
			array('Direccion', 'length', 'max'=>45),
			array('Telefono, Celular', 'length', 'max'=>20),
			array('FechaNacimiento, Foto', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCliente, Nombre, Apellido, Email, FechaNacimiento, Direccion, Foto, Telefono, Celular, Usuario_User', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCliente' => 'Id Cliente',
			'Nombre' => 'Nombre',
			'Apellido' => 'Apellido',
			'Email' => 'Email',
			'FechaNacimiento' => 'Fecha Nacimiento',
			'Direccion' => 'Direccion',
			'Foto' => 'Foto',
			'Telefono' => 'Telefono',
			'Celular' => 'Celular',
			'Usuario_User' => 'Usuario User',
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

		$criteria->compare('idCliente',$this->idCliente);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Apellido',$this->Apellido,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('FechaNacimiento',$this->FechaNacimiento,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Foto',$this->Foto,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Celular',$this->Celular,true);
		$criteria->compare('Usuario_User',$this->Usuario_User);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
