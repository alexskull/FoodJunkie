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
		<?php echo $form->textField($model,'Comentario',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'Comentario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RatingPrecio'); ?>/*
		<!--<?php $this->widget('CStarRating',array(
		    'model'=>$model,
		    'attribute'=>'RatingPrecio',
		    'value'=>$model->RatingPrecio,
		    'readOnly'=>false,
		    'name'=>'RatingPrecio',
		    'ratingStepSize'=>1,
		    'value'=>'3',
		    'minRating'=>1,
			'maxRating'=>5,
			'starCount'=>5, //number of stars));*/
			
		));?>-->
		<?php echo $form->dropDownList($model,'RatingPrecio',array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'RatingPrecio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RatingAtencion'); ?>
		<!--<?php $this->widget('CStarRating',array(
		    'model'=>$model,
		    'attribute'=>'RatingAtencion',
		    'name'=>'RatingAtencion',
		    'value'=>'3',
		    'minRating'=>1,
			'maxRating'=>5,
			'starCount'=>5, //number of stars));
		));?>-->
		<?php echo $form->dropDownList($model,'RatingAtencion',array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'RatingAtencion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RatingCalidad'); ?>
	<!--	<?php $this->widget('CStarRating',array(
		    'model'=>$model,
		    'attribute'=>'RatingCalidad',
		    'name'=>'RatingCalidad',
		    'value'=>'3',
		    'minRating'=>1,
			'maxRating'=>5,
			'starCount'=>5, //number of stars));
		));?>-->
		<?php echo $form->dropDownList($model,'RatingCalidad',array(''=>'','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5')); ?>
		<?php echo $form->error($model,'RatingCalidad'); ?>
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