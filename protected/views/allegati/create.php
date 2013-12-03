<?php
/* @var $this AllegatiController */
/* @var $model Allegati */

$idsez=$_GET['idsez'];
$sez=$_GET['sez'];

$this->breadcrumbs=array(
	'Allegati'=>array('index'),
	'Nuovo',
);

$this->menu=array(
	array('label'=>'Allegati', 'url'=>array('index')),
	//array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1>Nuovo Allegato</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>