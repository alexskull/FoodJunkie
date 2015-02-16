<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'register',
);


?>

<h1>Registrar Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>