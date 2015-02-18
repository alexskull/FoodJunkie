<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>
<div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2><a> Registro de <span>Usuarios</span></a> </h2>
                </div>
            </div>
</div>

</div>
        	<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>
			
<div id="content">
        <div class="main">
        	      <div class="aligncenter img-indent-bot">
 <div class="aligncenter">   

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Password')); ?>:</b>
	<?php echo CHtml::encode($data->Password); ?>
	<br />

	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Roles_idRoles')); ?>:</b>
	<?php echo CHtml::encode($data->Roles_idRoles); ?>
	<br />

	 

</div>