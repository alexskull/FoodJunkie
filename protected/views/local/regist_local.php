<?php
/* @var $this LocalController */
/* @var $model Local */

$this->breadcrumbs=array(
	'Locals'=>array('index'),
	'Create',
);

?>

<h1>Create Local</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>