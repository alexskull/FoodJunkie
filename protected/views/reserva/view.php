<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('index'),
	$model->idReserva,
);

$this->menu=array(
	array('label'=>'Cancelar Reserva', 'url'=>array('cancelacion', 'id'=>$model->idReserva)),
	array('label'=>'Create Reserva', 'url'=>array('create')),
	array('label'=>'Update Reserva', 'url'=>array('update', 'id'=>$model->idReserva)),
	array('label'=>'Delete Reserva', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idReserva),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reserva', 'url'=>array('admin'), 'visible'=>Yii::app()->user->getState('idRol')==1),
);
?>

<h1>View Reserva #<?php echo $model->idReserva; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idReserva',
		'Hora',
		'Cant_Personas',
		'Fecha',
		'Activa',
		'Usuario_User',
		'Local_idLocal',
	),
)); ?>
