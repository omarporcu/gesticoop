<?php
/* @var $this ParcoController */
/* @var $model Parco */

$this->breadcrumbs=array(
	'Parcos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Parco', 'url'=>array('index')),
	array('label'=>'Create Parco', 'url'=>array('create')),
	array('label'=>'View Parco', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Parco', 'url'=>array('admin')),
);
?>

<h1>Update Parco <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>