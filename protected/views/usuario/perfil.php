<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->Username,
);


?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Username',
		'Password',
		'Nombre',
		'Apellido',
		'Email',
		'Foto',
		'Telefono',
		'Administrador',
	),
)); ?>