<?php
/* @var $this FattureController */
/* @var $model Fatture */

$this->breadcrumbs=array(
	'Fattures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fatture', 'url'=>array('index')),
	array('label'=>'Manage Fatture', 'url'=>array('admin')),
);
?>

<h1>Create Fatture</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>