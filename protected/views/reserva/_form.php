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
		<?php 
		   $this->widget('application.extensions.timepicker.timepicker', array(
            'id'=>'Hora',
            'model'=>$model,
            'name'=>'Hora',
            'select'=> 'time',
            'options' => array(
            'showOn'=>'focus',
                'timeFormat'=>'hh:mm',
                //'hourMin'=> (int) $hourMin,
                //'hourMax'=> (int) $hourMax,
                'hourGrid'=>2,
                'minuteGrid'=>10,
            ),
        ));
		?>
		<?php echo $form->error($model,'Hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cant_Personas'); ?>
		<?php echo $form->textField($model,'Cant_Personas'); ?>
		<?php echo $form->error($model,'Cant_Personas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		    'model' => $model,
		    'attribute' => 'Fecha',
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
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Local_idLocal'); ?>
		<?php echo $form->dropDownList($model,'Local_idLocal',CHtml::listData(Local::model()->findAll(),'idLocal','Nombre'),array('empty'=>'Seleccione un tipo')); ?>
		<?php echo $form->error($model,'Local_idLocal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->