<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'register',
);


?>

<div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2><a> Bienvenido <span>Unete como</span></a> </h2>
                </div>
            </div>
</div>

  <div class="row-bot">
        	<div id="general">
            	<div id="derecha">
                	
 
                 <?php $this->widget('zii.widgets.jui.CJuiButton', array(
			    'buttonType'=>'link',
			    'name'=>'boton2',
			    'caption'=>'Usuario',
			    'htmlOptions'=>array('class'=>'boton2'),
			    'url'=>array('/Cliente/Create'),
			)); ?> 
                  
                    
                </div>
                <div id="izquierda">
                                   
		                 <?php $this->widget('zii.widgets.jui.CJuiButton', array(
					    'buttonType'=>'link',
					    'name'=>'boton1',
					    'caption'=>'Local',
					    'htmlOptions'=>array('class'=>'boton1'),
					    'url'=>array('/Local/Create'),)); 
						?>                                   
               
            </div>
        </div>