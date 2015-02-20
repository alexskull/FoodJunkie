<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('index'),
	'Create',
);


?>

<h1>Create Reserva</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>