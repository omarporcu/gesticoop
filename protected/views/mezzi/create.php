<?php
/* @var $this MezziController */
/* @var $model Mezzi */

$this->breadcrumbs=array(
	'Mezzi'=>array('index'),
	'Nuovo',
);

$this->menu=array(
	array('label'=>'Mezzi', 'url'=>array('index')),
	//array('label'=>'Manage Mezzi', 'url'=>array('admin')),
);
?>

<h1>Nuovo Mezzo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>