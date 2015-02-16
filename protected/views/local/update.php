<?php
/* @var $this LocalController */
/* @var $model Local */

$this->breadcrumbs=array(
	'Locals'=>array('index'),
	$model->idLocal=>array('view','id'=>$model->idLocal),
	'Update',
);

$this->menu=array(
	array('label'=>'List Local', 'url'=>array('index')),
	array('label'=>'Create Local', 'url'=>array('create')),
	array('label'=>'View Local', 'url'=>array('view', 'id'=>$model->idLocal)),
	array('label'=>'Manage Local', 'url'=>array('admin')),
);
?>

<h1>Update Local <?php echo $model->idLocal; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>