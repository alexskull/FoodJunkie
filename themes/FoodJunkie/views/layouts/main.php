<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl;?>/css/prettyPhoto.css" />
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery-1.7.1.min.js'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/cufon-yui.js'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/Dynalight_400.font.js'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/FF-cash.js'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/tms-0.3.js'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/tms_presets.js'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.easing.1.3.js'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/cufon-replace.js'); ?>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.equalheights.js'); ?>


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body id="page1">
	<!--==============================header=================================-->
    <header>
       	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="/Foodjunkie">FoodJunkie<span>.com</span></a></h1>
                    <nav>
                        <ul class="menu">
                        	<?php $this->widget('zii.widgets.CMenu',array(
					            'items'=>array(
					           
					              
					                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					                array('label'=>'Registrarse', 'url'=>array('/usuario/register'), 'visible'=>Yii::app()->user->isGuest),
					                array('label'=>'('.Yii::app()->user->name.')', 'url'=>array('/usuario/perfil','id'=>Yii::app()->user->id), 'visible'=>!Yii::app()->user->isGuest),
					                array('label'=>'Registrar Local('.Yii::app()->user->name.')', 'url'=>array('/local/regist_local'), 'visible'=>!Yii::app()->user->isGuest),
					                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					            ),
      						  )); ?>
                                       
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
       
     
    </header>
    
	<?php echo $content; ?>
	  

<div class="clear"></div>


	<!--==============================footer=================================-->
 <div id="footer">
        <div class="main">
        	<div class="aligncenter">
            	<span>FoodJunkie.com &copy; 2014</span>
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
		$(window).load(function() {
			$('.slider')._TMS({
				duration:1000,
				easing:'easeOutQuint',
				preset:'slideDown',
				slideshow:7000,
				banners:false,
				pauseOnHover:true,
				pagination:true,
				pagNums:false
			});
		});
    </script>
</body>
</html>
