<?php
/* @var $this ReviewController */
/* @var $model Review */

$this->breadcrumbs=array(
	'Reviews'=>array('index'),
	$model->idReview,
);

$this->menu=array(

	array('label'=>'Update Review', 'url'=>array('update', 'id'=>$model->idReview)),
	array('label'=>'Delete Review', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idReview),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Review', 'url'=>array('admin'), 'visible'=>Yii::app()->user->getState('idRol')==1),
);
?>

<h1>View Review #<?php echo $model->idReview; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idReview',
		'Comentario',
		'RatingPrecio',
		'RatingAtencion',
		'RatingCalidad',
		'Usuario_User',
		'Local_idLocal',
	),
)); ?>
