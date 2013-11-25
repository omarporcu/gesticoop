<?php
/* @var $this AllegatiController */
/* @var $model Allegati */

$this->breadcrumbs=array(
	'Allegatis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Allegati', 'url'=>array('index')),
	array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1>Create Allegati</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>