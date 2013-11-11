<?php
/* @var $this PrestitiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prestitis',
);

$this->menu=array(
	array('label'=>'Create Prestiti', 'url'=>array('create')),
	array('label'=>'Manage Prestiti', 'url'=>array('admin')),
);
?>

<h1>Prestitis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
