<?php
/* @var $this FattureController */
/* @var $model Fatture */

$this->breadcrumbs=array(
	'Fattures'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fatture', 'url'=>array('index')),
	array('label'=>'Create Fatture', 'url'=>array('create')),
	array('label'=>'View Fatture', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Fatture', 'url'=>array('admin')),
);
?>

<h1>Update Fatture <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>