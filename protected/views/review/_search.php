<?php
/* @var $this ReviewController */
/* @var $model Review */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Comentario'); ?>
		<?php echo $form->textField($model,'Comentario',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RatingPrecio'); ?>
		<?php echo $form->textField($model,'RatingPrecio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RatingAtencion'); ?>
		<?php echo $form->textField($model,'RatingAtencion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RatingCalidad'); ?>
		<?php echo $form->textField($model,'RatingCalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Local_Usuario_Username'); ?>
		<?php echo $form->textField($model,'Local_Usuario_Username',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuario_Username'); ?>
		<?php echo $form->textField($model,'Usuario_Username',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->