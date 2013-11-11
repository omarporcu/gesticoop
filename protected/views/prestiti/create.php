<?php
/* @var $this PrestitiController */
/* @var $model Prestiti */

$this->breadcrumbs=array(
	'Prestitis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Prestiti', 'url'=>array('index')),
	array('label'=>'Manage Prestiti', 'url'=>array('admin')),
);
?>

<h1>Create Prestiti</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>