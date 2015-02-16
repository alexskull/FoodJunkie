<?php
/* @var $this ReviewController */
/* @var $data Review */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_Username')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Usuario_Username), array('view', 'id'=>$data->Usuario_Username)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comentario')); ?>:</b>
	<?php echo CHtml::encode($data->Comentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RatingPrecio')); ?>:</b>
	<?php echo CHtml::encode($data->RatingPrecio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RatingAtencion')); ?>:</b>
	<?php echo CHtml::encode($data->RatingAtencion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RatingCalidad')); ?>:</b>
	<?php echo CHtml::encode($data->RatingCalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Local_Usuario_Username')); ?>:</b>
	<?php echo CHtml::encode($data->Local_Usuario_Username); ?>
	<br />


</div>