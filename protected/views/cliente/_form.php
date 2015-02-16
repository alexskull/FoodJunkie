<?php
/* @var $this ClienteController */
/* @var $model1 Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
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
		<?php echo $form->textField($model1,'Nombre',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model1,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Apellido'); ?>
		<?php echo $form->textField($model1,'Apellido',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model1,'Apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Email'); ?>
		<?php echo $form->textField($model1,'Email',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model1,'Email'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model1,'FechaNacimiento'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model1,
		    'attribute' => 'FechaNacimiento',
		    'themeUrl' => Yii::app()->baseUrl . '/css/jui',
		    'theme' => 'softark',
		    'cssFile' => 'jquery-ui-1.9.2.custom.css',
		    'options' => array(
		        'showOn' => 'both',             // also opens with a button
		        'dateFormat' => 'yy-mm-dd',     // format of "2012-12-25"
		        'showOtherMonths' => true,      // show dates in other months
		        'selectOtherMonths' => true,    // can seelect dates in other months
		        'changeYear' => true,           // can change year
		        'changeMonth' => true,          // can change month
		        'yearRange' => '1950:2099',     // range of year
		        'minDate' => '1950-01-01',      // minimum date
		        'maxDate' => '2099-12-31',      // maximum date
		        'showButtonPanel' => true,      // show button panel
		    ),
		    'htmlOptions' => array(
		        'size' => '10',
		        'maxlength' => '10',
		    ),
		));
		?>
		<?php echo $form->error($model1,'FechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Direccion'); ?>
		<?php echo $form->textField($model1,'Direccion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model1,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Foto'); ?>
		<?php echo $form->textField($model1,'Foto'); ?>
		<?php echo $form->error($model1,'Foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Telefono'); ?>
		<?php echo $form->textField($model1,'Telefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model1,'Telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model1,'Celular'); ?>
		<?php echo $form->textField($model1,'Celular',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model1,'Celular'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model1->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->