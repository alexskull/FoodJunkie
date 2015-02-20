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
		<?php echo $form->label($model,'idReview'); ?>
		<?php echo $form->textField($model,'idReview'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comentario'); ?>
		<?php echo $form->textField($model,'Comentario',array('size'=>60,'maxlength'=>240)); ?>
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