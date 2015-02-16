<?php
/* @var $this TipoLocalController */
/* @var $model TipoLocal */

$this->breadcrumbs=array(
	'Tipo Locals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoLocal', 'url'=>array('index')),
	array('label'=>'Manage TipoLocal', 'url'=>array('admin')),
);
?>

<h1>Create TipoLocal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>