<?php

class ClienteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create'),
				'users'=>array('*'),
			),
			array('allow',  // allow all users to perform 'perfil actions
				'actions'=>array('perfil'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getState("idRol")==2'
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getState("idRol")==1'
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
	/*	$model=new Cliente;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cliente']))
		{
			$model->attributes=$_POST['Cliente'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idCliente));
		}

		$this->render('create',array(
			'model'=>$model,
		));*/
		
		$model1=new Cliente;
		$model2=new Usuario;
		
		 if(isset($_POST['Cliente'], $_POST['Usuario']))        
		 {
		    // populate input data to $a and $b
		    $model1->attributes=$_POST['Cliente'];
		    $model2->attributes=$_POST['Usuario'];
		
		    // validate BOTH $a and $b
		   		$valid=$model1->validate();
				$model2->Roles_idRoles = 2;
		        $valid=$model2->validate() && $valid;
		
		        if($valid)
		        {
		            $model2->save(false);
		
		            $model1->Usuario_User = $model2->id;
		            $model1->save();
		        }
		    }
		
			if(isset($_POST['Cliente']))
			{
				$model1->attributes=$_POST['Cliente'];
				if($model1->save())
					$this->redirect(array('view','id'=>$model1->idCliente));
			}
			
		    $this->render('create', array(
		        'model2'=>$model2,
		        'model1'=>$model1,
		        
		    ));
		
		
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cliente']))
		{
			$model->attributes=$_POST['Cliente'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idCliente));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

		/**
		* Uploads files submitted via CMultiFileUpload widget
		* Deletes all old files before uploading new files
	*/
	public function actionUpload()
	{
		if(isset($_FILES['files']))
		{
		// delete old files
		foreach($this->findFiles() as $filename)
		unlink(Yii::app()->params['uploadDir'].$filename);
		//upload new files
		foreach($_FILES['files']['name'] as $key=>$filename)
		move_uploaded_file($_FILES['files']['tmp_name'][$key],Yii::app()->params['uploadDir'].$filename);
		}
		$this->redirect(array('site/widget','view'=>'multifileupload'));
	}
	

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Cliente');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	public function actionPerfil()
	{
		$this->render('perfil',array(
			'model'=>$this->loadPerfil(),
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cliente('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cliente']))
			$model->attributes=$_GET['Cliente'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cliente the loaded model
	 * @throws CHttpException
	 */
	 
	public function loadPerfil()
	{

		$modelu=Usuario::model()->findByAttributes(array('Usuario'=>Yii::app()->user->id));
		$model=Cliente::model()->findByAttributes(array('Usuario_User'=>$modelu->id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	 
	 
	public function loadModel($id)
	{
		$model=Cliente::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cliente $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cliente-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
