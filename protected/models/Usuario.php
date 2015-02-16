<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id
 * @property string $Usuario
 * @property string $Password
 * @property integer $Roles_idRoles
 *
 * The followings are the available model relations:
 * @property Cliente[] $clientes
 * @property Local[] $locals
 * @property Reserva[] $reservas
 * @property Review[] $reviews
 * @property Roles $rolesIdRoles
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuario, Password, Roles_idRoles', 'required'),
			array('Roles_idRoles', 'numerical', 'integerOnly'=>true),
			array('Usuario, Password', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Usuario, Password, Roles_idRoles', 'safe', 'on'=>'search'),
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
			'clientes' => array(self::HAS_MANY, 'Cliente', 'Usuario_User'),
			'locals' => array(self::HAS_MANY, 'Local', 'Usuario_User'),
			'reservas' => array(self::HAS_MANY, 'Reserva', 'Usuario_User'),
			'reviews' => array(self::HAS_MANY, 'Review', 'Usuario_User'),
			'rolesIdRoles' => array(self::BELONGS_TO, 'Roles', 'Roles_idRoles'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Usuario' => 'Usuario',
			'Password' => 'Password',
			'Roles_idRoles' => 'Roles Id Roles',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Usuario',$this->Usuario,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('Roles_idRoles',$this->Roles_idRoles);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
