<?php
/* @var $this TipoLocalController */
/* @var $model TipoLocal */

$this->breadcrumbs=array(
	'Tipo Locals'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoLocal', 'url'=>array('index')),
	array('label'=>'Create TipoLocal', 'url'=>array('create')),
	array('label'=>'View TipoLocal', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage TipoLocal', 'url'=>array('admin')),
);
?>

<h1>Update TipoLocal <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>