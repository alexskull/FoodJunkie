<?php
/* @var $this LocalController */
/* @var $model Local */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'local-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($model1,$model2)); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model2,'Usuario'); ?>
		<?php echo $form->textField($model2,'Usuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model2,'Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model2,'Password'); ?>
		<?php echo $form->passwordField($model2,'Password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model2,'Password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Nombre'); ?>
		<?php echo $form->textField($model1,'Nombre',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model1,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Estado'); ?>
		<?php echo $form->textField($model1,'Estado',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model1,'Estado'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model1,'Ciudad'); ?>
		<?php echo $form->textField($model1,'Ciudad',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model1,'Ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Direccion'); ?>
		<?php echo $form->textField($model1,'Direccion',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model1,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Email'); ?>
		<?php echo $form->textField($model1,'Email',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model1,'Email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Telefono'); ?>
		<?php echo $form->textField($model1,'Telefono',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model1,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Reservas'); ?>
		<?php echo $form->dropDownList($model1,'Reservas',array(''=>'','S'=>'Si','N'=>'No')); ?>
		<?php echo $form->error($model1,'Reservas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Capacidad'); ?>
		<?php echo $form->textField($model1,'Capacidad'); ?>
		<?php echo $form->error($model1,'Capacidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Hora_Ini'); ?>
		<?php echo $form->textField($model1,'Hora_Ini'); ?>
		<?php echo $form->error($model1,'Hora_Ini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Hora_Fin'); ?>
		<?php echo $form->textField($model1,'Hora_Fin'); ?>
		<?php echo $form->error($model1,'Hora_Fin'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model1,'Tipo_Local_ID'); ?>
		<?php echo $form->dropDownList($model1,'Tipo_Local_ID',CHtml::listData(TipoLocal::model()->findAll(),'ID','Nombre'),array('empty'=>'Seleccione un tipo')); ?>
		<?php echo $form->error($model1,'Tipo_Local_ID'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model1->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->