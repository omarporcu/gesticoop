<?php
/* @var $this FattureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fattures',
);

$this->menu=array(
	array('label'=>'Create Fatture', 'url'=>array('create')),
	array('label'=>'Manage Fatture', 'url'=>array('admin')),
);
?>

<h1>Fattures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
