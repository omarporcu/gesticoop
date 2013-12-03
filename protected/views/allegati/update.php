<?php
/* @var $this AllegatiController */
/* @var $model Allegati */

$this->breadcrumbs=array(
	'Allegati'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Aggiorna',
);

$this->menu=array(
	array('label'=>'Allegati', 'url'=>array('index')),
	array('label'=>'Nuovo Allegato', 'url'=>array('create')),
	array('label'=>'Dettagli Allegato', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Allegati', 'url'=>array('admin')),
);
?>

<h1>Aggiorna Allegato <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>