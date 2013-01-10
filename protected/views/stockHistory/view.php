<?php
/* @var $this StockHistoryController */
/* @var $model StockHistory */

$this->breadcrumbs=array(
	'Stock Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StockHistory', 'url'=>array('index')),
	array('label'=>'Create StockHistory', 'url'=>array('create')),
	array('label'=>'Update StockHistory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StockHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StockHistory', 'url'=>array('admin')),
);
?>

<h1>View StockHistory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'medicine_id',
		'amount',
		'last_update',
		'officer',
	),
)); ?>
