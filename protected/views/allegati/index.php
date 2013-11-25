<?php
/* @var $this AllegatiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Allegatis',
);

$this->menu=array(
	array('label'=>'Create Allegati', 'url'=>array('create')),
	array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1>Allegatis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
