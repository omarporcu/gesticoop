<?php
/* @var $this SediController */
/* @var $model Sedi */

$this->breadcrumbs=array(
	'Sedis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sedi', 'url'=>array('index')),
	array('label'=>'Create Sedi', 'url'=>array('create')),
	array('label'=>'View Sedi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sedi', 'url'=>array('admin')),
);
?>

<h1>Update Sedi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>