<?php
/* @var $this StockHistoryController */
/* @var $model StockHistory */

$this->breadcrumbs=array(
	'Stock Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StockHistory', 'url'=>array('index')),
	array('label'=>'Create StockHistory', 'url'=>array('create')),
	array('label'=>'View StockHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StockHistory', 'url'=>array('admin')),
);
?>

<h1>Update StockHistory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>