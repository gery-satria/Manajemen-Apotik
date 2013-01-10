<?php
/* @var $this PurchaseItemController */
/* @var $model PurchaseItem */

$this->breadcrumbs=array(
	'Purchase Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PurchaseItem', 'url'=>array('index')),
	array('label'=>'Create PurchaseItem', 'url'=>array('create')),
	array('label'=>'Update PurchaseItem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PurchaseItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PurchaseItem', 'url'=>array('admin')),
);
?>

<h1>View PurchaseItem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'purchase_id',
		'medicine_id',
		'amount',
		'price_per_unit',
		'supplier_id',
	),
)); ?>
