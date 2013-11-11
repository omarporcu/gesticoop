<?php
/* @var $this PrestitiController */
/* @var $model Prestiti */

$this->breadcrumbs=array(
	'Prestitis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prestiti', 'url'=>array('index')),
	array('label'=>'Create Prestiti', 'url'=>array('create')),
	array('label'=>'View Prestiti', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Prestiti', 'url'=>array('admin')),
);
?>

<h1>Update Prestiti <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>