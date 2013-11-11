<?php
/* @var $this ContrattiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contrattis',
);

$this->menu=array(
	array('label'=>'Create Contratti', 'url'=>array('create')),
	array('label'=>'Manage Contratti', 'url'=>array('admin')),
);
?>

<h1>Contrattis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
