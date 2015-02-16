<?php
/* @var $this TipoLocalController */
/* @var $model TipoLocal */

$this->breadcrumbs=array(
	'Tipo Locals'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List TipoLocal', 'url'=>array('index')),
	array('label'=>'Create TipoLocal', 'url'=>array('create')),
	array('label'=>'Update TipoLocal', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete TipoLocal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoLocal', 'url'=>array('admin')),
);
?>

<h1>View TipoLocal #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Nombre',
	),
)); ?>
