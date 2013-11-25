<?php
/* @var $this AllegatiController */
/* @var $model Allegati */

$this->breadcrumbs=array(
	'Allegatis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Allegati', 'url'=>array('index')),
	array('label'=>'Create Allegati', 'url'=>array('create')),
	array('label'=>'View Allegati', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1>Update Allegati <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>