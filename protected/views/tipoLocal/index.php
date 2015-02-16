<?php
/* @var $this TipoLocalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Locals',
);

$this->menu=array(
	array('label'=>'Create TipoLocal', 'url'=>array('create')),
	array('label'=>'Manage TipoLocal', 'url'=>array('admin')),
);
?>

<h1>Tipo Locals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
