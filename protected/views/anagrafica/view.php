<?php
/* @var $this AnagraficaController */
/* @var $model Anagrafica */

$nomecognome = $model->cognome.' '.$model->nome;

$this->breadcrumbs=array(
	'Anagrafica'=>array('index'),
	$model->cognome.' '.$model->nome,
);

$this->menu=array(
	array('label'=>'Anagrafica', 'url'=>array('index')),
	array('label'=>'Nuova Anagrafica', 'url'=>array('create')),
	array('label'=>'Aggiorna Anagrafica', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Elimina Anagrafica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Anagrafica', 'url'=>array('admin')),
);
?>

<h1>Dettaglio Anagrafica - <?php echo $model->cognome." ".$model->nome; ?></h1>

<!--?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'cognome',
		'data_nascita',
		'regione_nascita',
		'provincia_nascita',
		'comune_nascita',
		'c_fiscale',
		'regione_residenza',
		'provincia_residenza',
		'comune_residenza',
		'indirizzo_residenza',
		'email',
		'telefono',
		'fax',
		'cellulare',
		'iban',
		'note',
	),
)); ?-->

<?php echo $this->renderPartial('_view', array('model'=>$model)); ?>

	<table style="margin-bottom: 0px !important; margin-top: 2em !important;">
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Documenti Associati
					</div>
				</div>
			</td>
		</tr>
	</table>
	
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('documenti/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'documenti-grid',
	'summaryText'=>CHtml::link('[+] Aggiungi Documento','../documenti/create?an='.$_GET['id'].'&ut='.$nomecognome,array('class'=>'')),
	'dataProvider'=>Documenti::model()->searchByAnagrafica($_GET['id']),
	//'filter'=>Mezzi::model(),
	'columns'=>array(
		//'id',
		//'id_anagrafica',
		'tipo.nome',
		'numero_documento',
		'ente_rilascio',
		'data_rilascio',
		'scadenza',
		//'note',
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>

	<table style="margin-bottom: 0px !important; margin-top: 2em !important;">
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Contratti Associati
					</div>
				</div>
			</td>
		</tr>
	</table>
	
<!--?php echo CHtml::link('[+] Aggiungi Documento','../documenti/create',array('class'=>'')); ?-->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('contratti/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'contratti-grid',
	'summaryText'=>CHtml::link('[+] Aggiungi Contratto','../contratti/create',array('class'=>'')),
	'dataProvider'=>Contratti::model()->searchByAnagrafica($_GET['id']),
	//'filter'=>Mezzi::model(),
	'columns'=>array(
		'ncontratto',
		//'utente',
		'societa',
		//'tipologia',
		'data_inizio',
		'data_fine',
		//'ruolo',
		//'provvigione',
		//'note',
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>

	<table style="margin-bottom: 0px !important; margin-top: 1.4em !important;">
		<tr>
			<td colspan="2">
				<div class="portlet-decoration">
					<div class="portlet-title">
						Mezzi Associati
					</div>
				</div>
			</td>
		</tr>
	</table>
	
<!--?php echo CHtml::link('[+] Aggiungi Mezzo','../mezzi/create',array('class'=>'')); ?-->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'ajaxUpdate'=>'ajaxContent',
	'selectionChanged'=>"function(id){window.location='" . Yii::app()->urlManager->createUrl('mezzi/view', array('id'=>'')) . "' + $.fn.yiiGridView.getSelection(id);}",
	'id'=>'mezzi-grid',
	'summaryText'=>CHtml::link('[+] Aggiungi Mezzo','../mezzi/create',array('class'=>'')),
	'dataProvider'=>Mezzi::model()->searchByAnagrafica($_GET['id']),
	//'filter'=>Mezzi::model(),
	'columns'=>array(
		'id',
		//'proprietario',
		'marca',
		'modello',
		'prezzo',
		'rata',
		'targa',
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
