<?php
/* @var $this ReviewController */
/* @var $model Review */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'review-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Comentario'); ?>
		<?php echo $form->textField($model,'Comentario',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'Comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RatingPrecio'); ?>
		<?php echo $form->textField($model,'RatingPrecio'); ?>
		<?php echo $form->error($model,'RatingPrecio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RatingAtencion'); ?>
		<?php echo $form->textField($model,'RatingAtencion'); ?>
		<?php echo $form->error($model,'RatingAtencion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RatingCalidad'); ?>
		<?php echo $form->textField($model,'RatingCalidad'); ?>
		<?php echo $form->error($model,'RatingCalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Local_Usuario_Username'); ?>
		<?php echo $form->textField($model,'Local_Usuario_Username',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Local_Usuario_Username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_Username'); ?>
		<?php echo $form->textField($model,'Usuario_Username',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Usuario_Username'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->