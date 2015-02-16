<?php

/**
 * This is the model class for table "local".
 *
 * The followings are the available columns in table 'local':
 * @property integer $idLocal
 * @property string $Nombre
 * @property string $Estado
 * @property string $Ciudad
 * @property string $Direccion
 * @property string $Email
 * @property string $Telefono
 * @property string $Reservas
 * @property integer $Capacidad
 * @property string $Hora_Ini
 * @property string $Hora_Fin
 * @property double $Rating
 * @property integer $Tipo_Local_ID
 * @property integer $Usuario_User
 *
 * The followings are the available model relations:
 * @property Usuario $usuarioUser
 * @property TipoLocal $tipoLocal
 * @property Reserva[] $reservas
 * @property Review[] $reviews
 */
class Local extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'local';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nombre, Estado, Ciudad, Direccion, Reservas, Capacidad, Hora_Ini, Hora_Fin, Tipo_Local_ID', 'required'),
			array('Capacidad, Tipo_Local_ID, Usuario_User', 'numerical', 'integerOnly'=>true),
			array('Rating', 'numerical'),
			array('Nombre', 'length', 'max'=>20),
			array('Estado', 'length', 'max'=>15),
			array('Ciudad, Direccion, Email, Telefono', 'length', 'max'=>25),
			array('Reservas', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idLocal, Nombre, Estado, Ciudad, Direccion, Email, Telefono, Reservas, Capacidad, Hora_Ini, Hora_Fin, Rating, Tipo_Local_ID, Usuario_User', 'safe', 'on'=>'search'),
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
			'tipoLocal' => array(self::BELONGS_TO, 'TipoLocal', 'Tipo_Local_ID'),
			'reservas' => array(self::HAS_MANY, 'Reserva', 'Local_idLocal'),
			'reviews' => array(self::HAS_MANY, 'Review', 'Local_idLocal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idLocal' => 'Id Local',
			'Nombre' => 'Nombre',
			'Estado' => 'Estado',
			'Ciudad' => 'Ciudad',
			'Direccion' => 'Direccion',
			'Email' => 'Email',
			'Telefono' => 'Telefono',
			'Reservas' => 'Reservas',
			'Capacidad' => 'Capacidad',
			'Hora_Ini' => 'Hora Ini',
			'Hora_Fin' => 'Hora Fin',
			'Rating' => 'Rating',
			'Tipo_Local_ID' => 'Tipo Local',
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

		$criteria->compare('idLocal',$this->idLocal);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('Ciudad',$this->Ciudad,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Reservas',$this->Reservas,true);
		$criteria->compare('Capacidad',$this->Capacidad);
		$criteria->compare('Hora_Ini',$this->Hora_Ini,true);
		$criteria->compare('Hora_Fin',$this->Hora_Fin,true);
		$criteria->compare('Rating',$this->Rating);
		$criteria->compare('Tipo_Local_ID',$this->Tipo_Local_ID);
		$criteria->compare('Usuario_User',$this->Usuario_User);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Local the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
