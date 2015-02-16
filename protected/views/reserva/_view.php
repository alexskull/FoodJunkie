<?php
/* @var $this ReservaController */
/* @var $data Reserva */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idReserva')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idReserva), array('view', 'id'=>$data->idReserva)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora')); ?>:</b>
	<?php echo CHtml::encode($data->Hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cant_Personas')); ?>:</b>
	<?php echo CHtml::encode($data->Cant_Personas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Activa')); ?>:</b>
	<?php echo CHtml::encode($data->Activa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_User')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_User); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Local_idLocal')); ?>:</b>
	<?php echo CHtml::encode($data->Local_idLocal); ?>
	<br />


</div>