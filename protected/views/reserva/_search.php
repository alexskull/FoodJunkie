<?php
/* @var $this ReservaController */
/* @var $model Reserva */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idReserva'); ?>
		<?php echo $form->textField($model,'idReserva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Hora'); ?>
		<?php echo $form->textField($model,'Hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cant_Personas'); ?>
		<?php echo $form->textField($model,'Cant_Personas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Activa'); ?>
		<?php echo $form->textField($model,'Activa',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuario_User'); ?>
		<?php echo $form->textField($model,'Usuario_User'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Local_idLocal'); ?>
		<?php echo $form->textField($model,'Local_idLocal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->