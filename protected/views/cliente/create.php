<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);


?>

<h1>Registro de Clientes</h1>

<?php $this->renderPartial('_form', array('model1'=>$model1, 'model2'=>$model2)); ?>