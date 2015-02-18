<?php
/* @var $this LocalController */
/* @var $data Local */
?>

<div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2><a> Registro de <span>Usuarios</span></a> </h2>
                </div>
            </div>
</div>

<div id="content">
        <div class="main">
        	      <div class="aligncenter img-indent-bot">
 <div class="aligncenter">   


	<b><?php echo CHtml::encode($data->getAttributeLabel('idLocal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idLocal), array('view', 'id'=>$data->idLocal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Reservas')); ?>:</b>
	<?php echo CHtml::encode($data->Reservas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Capacidad')); ?>:</b>
	<?php echo CHtml::encode($data->Capacidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora_Ini')); ?>:</b>
	<?php echo CHtml::encode($data->Hora_Ini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Hora_Fin')); ?>:</b>
	<?php echo CHtml::encode($data->Hora_Fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rating')); ?>:</b>
	<?php echo CHtml::encode($data->Rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Local_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_Local_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_User')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_User); ?>
	<br />

	*/ ?>

</div>