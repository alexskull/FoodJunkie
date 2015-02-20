<?php

/**
 * This is the model class for table "review".
 *
 * The followings are the available columns in table 'review':
 * @property integer $idReview
 * @property string $Comentario
 * @property double $RatingPrecio
 * @property double $RatingAtencion
 * @property double $RatingCalidad
 * @property integer $Usuario_User
 * @property integer $Local_idLocal
 *
 * The followings are the available model relations:
 * @property Local $localIdLocal
 * @property Usuario $usuarioUser
 */
class Review extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'review';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RatingPrecio, RatingAtencion, RatingCalidad, Local_idLocal', 'required'),
			array('Usuario_User, Local_idLocal', 'numerical', 'integerOnly'=>true),
			array('RatingPrecio, RatingAtencion, RatingCalidad', 'numerical'),
			array('Comentario', 'length', 'max'=>240),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idReview, Comentario, RatingPrecio, RatingAtencion, RatingCalidad, Usuario_User, Local_idLocal', 'safe', 'on'=>'search'),
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
			'localIdLocal' => array(self::BELONGS_TO, 'Local', 'Local_idLocal'),
			'usuarioUser' => array(self::BELONGS_TO, 'Usuario', 'Usuario_User'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idReview' => 'Id Review',
			'Comentario' => 'Comentario',
			'RatingPrecio' => 'Rating Precio',
			'RatingAtencion' => 'Rating Atencion',
			'RatingCalidad' => 'Rating Calidad',
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

		$criteria->compare('idReview',$this->idReview);
		$criteria->compare('Comentario',$this->Comentario,true);
		$criteria->compare('RatingPrecio',$this->RatingPrecio);
		$criteria->compare('RatingAtencion',$this->RatingAtencion);
		$criteria->compare('RatingCalidad',$this->RatingCalidad);
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
	 * @return Review the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
