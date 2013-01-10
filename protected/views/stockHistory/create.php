<?php
/* @var $this StockHistoryController */
/* @var $model StockHistory */

$this->breadcrumbs=array(
	'Stock Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StockHistory', 'url'=>array('index')),
	array('label'=>'Manage StockHistory', 'url'=>array('admin')),
);
?>

<h1>Create StockHistory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>