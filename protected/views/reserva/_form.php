<?php
/* @var $this ReservaController */
/* @var $model Reserva */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reserva-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Hora'); ?>
		<?php echo $form->textField($model,'Hora'); ?>
		<?php echo $form->error($model,'Hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cant_Personas'); ?>
		<?php echo $form->textField($model,'Cant_Personas'); ?>
		<?php echo $form->error($model,'Cant_Personas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Activa'); ?>
		<?php echo $form->textField($model,'Activa',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'Activa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_User'); ?>
		<?php echo $form->textField($model,'Usuario_User'); ?>
		<?php echo $form->error($model,'Usuario_User'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Local_idLocal'); ?>
		<?php echo $form->textField($model,'Local_idLocal'); ?>
		<?php echo $form->error($model,'Local_idLocal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->