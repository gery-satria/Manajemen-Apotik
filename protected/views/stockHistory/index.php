<?php
/* @var $this StockHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stock Histories',
);

$this->menu=array(
	array('label'=>'Create StockHistory', 'url'=>array('create')),
	array('label'=>'Manage StockHistory', 'url'=>array('admin')),
);
?>

<h1>Stock Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
