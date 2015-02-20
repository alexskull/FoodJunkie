<?php
/* @var $this LocalController */
/* @var $model Local */

$this->breadcrumbs=array(
	'Locals'=>array('index'),
	$model->idLocal,
);

$this->menu=array(
	array('label'=>'List Local', 'url'=>array('index')),
	array('label'=>'Create Local', 'url'=>array('create')),
	array('label'=>'Update Local', 'url'=>array('update', 'id'=>$model->idLocal)),
	array('label'=>'Delete Local', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idLocal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Local', 'url'=>array('admin'), 'visible'=>Yii::app()->user->getState('idRol')==1),
);
?>

<h1>View Local #<?php echo $model->idLocal; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idLocal',
		'Nombre',
		'Estado',
		'Ciudad',
		'Direccion',
		'Email',
		'Telefono',
		'Reservas',
		'Capacidad',
		'Hora_Ini',
		'Hora_Fin',
		'Rating',
		'Tipo_Local_ID',
		'Usuario_User',
	),
)); ?>
