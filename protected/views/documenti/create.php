<?php
/* @var $this DocumentiController */
/* @var $model Documenti */

$ut=$_GET['ut'];
$an=$_GET['an'];

$this->breadcrumbs=array(
	'Documenti'=>array('index'),
	//'Create',
);

$this->menu=array(
	array('label'=>'Documenti', 'url'=>array('index')),
	//array('label'=>'Manage Documenti', 'url'=>array('admin')),
);
?>

<h1>Nuovo Documento per <?php echo $ut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>