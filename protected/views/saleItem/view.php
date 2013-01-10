<?php
/* @var $this SaleItemController */
/* @var $model SaleItem */

$this->breadcrumbs=array(
	'Sale Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SaleItem', 'url'=>array('index')),
	array('label'=>'Create SaleItem', 'url'=>array('create')),
	array('label'=>'Update SaleItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SaleItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SaleItem', 'url'=>array('admin')),
);
?>

<h1>View SaleItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sale_id',
		'medicine_id',
		'amount',
		'price',
		'costumer_id',
	),
)); ?>
