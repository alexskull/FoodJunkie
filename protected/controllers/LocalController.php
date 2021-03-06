<?php

class LocalController extends Controller
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
				'actions'=>array('index','view','create','local_perfil'),
				'users'=>array('*'),
			),
			array('allow',  // allow all users to perform 'perfil actions
				'actions'=>array('perfil'),
				'users'=>array('@'),
				'expression'=>'Yii::app()->user->getState("idRol")==3'
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
	 * Displays an imagen form different sources
	
	 */
	public function image_tag(){
        return CHtml::image(Yii::app()->baseUrl."/images/Sub.png");
	}
	
	public function image_with_link(){
	    $html= CHtml::link(
	        "<img src='".Yii::app()->baseUrl."/images/reports.png"."' />",
	        Yii::app()->createAbsoluteUrl("payment/invoice",array("id"=>$this->order_id))
	    );
	    return $html;
	}
	
	public function showphoto_from_database(){
	    if($this->bitmap!=''){
	        return CHtml::image("data:image/png;base64,".$photomodel->bitmap,
	            'No Image',
	            array('width'=>150,'height'=>100)
	        );
	    }else{
	        $url=Yii::app()->baseUrl."/img/noimage.jpg";               
	        return CHtml::image($url,'No Image');
	    }
	}
	
	
	public function actionPerfil()
	{
		$this->render('perfil',array(
			'model'=>$this->loadPerfil(),
		));
	}
	
		public function actionLocal_perfil()
	{
		$this->render('local_perfil'/*,array(
			'model'=>$this->loadPerfil(),
		)*/);
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		/*$model=new Local;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Local']))
		{
			$model->attributes=$_POST['Local'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idLocal));
		}

		$this->render('create',array(
			'model'=>$model,
		));*/
		$model1=new Local;
		$model2=new Usuario;
		
		 if(isset($_POST['Local'], $_POST['Usuario']))        
		 {
		    // populate input data to $a and $b
		    $model1->attributes=$_POST['Local'];
		    $model2->attributes=$_POST['Usuario'];
		
		    // validate BOTH $a and $b
		   		$valid=$model1->validate();
				$model2->Roles_idRoles = 3;
				$model1->Rating = 0;
		        $valid=$model2->validate() && $valid;
		
		        if($valid)
		        {
		            $model2->save(false);
		
		            $model1->Usuario_User = $model2->id;
		            $model1->save();
		        }
		    }
		
			if(isset($_POST['Local']))
			{
				$model1->attributes=$_POST['Local'];
				if($model1->save())
					$this->redirect(array('view','id'=>$model1->idLocal));
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

		if(isset($_POST['Local']))
		{
			$model->attributes=$_POST['Local'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idLocal));
		}

		$this->render('update',array(
			'model'=>$model,
		));
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
		$dataProvider=new CActiveDataProvider('Local');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Local('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Local']))
			$model->attributes=$_GET['Local'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	
	
	public function loadPerfil()
	{

		$modelu=Usuario::model()->findByAttributes(array('Usuario'=>Yii::app()->user->id));
		$model=Local::model()->findByAttributes(array('Usuario_User'=>$modelu->id));
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	 

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Local the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Local::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Local $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='local-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
