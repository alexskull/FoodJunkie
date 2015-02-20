<?php
/* @var $this ReviewController */
/* @var $data Review */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idReview')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idReview), array('view', 'id'=>$data->idReview)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_User')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_User); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Local_idLocal')); ?>:</b>
	<?php echo CHtml::encode($data->Local_idLocal); ?>
	<br />


</div>