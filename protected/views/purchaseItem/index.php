<?php
/* @var $this PurchaseItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Purchase Items',
);

$this->menu=array(
	array('label'=>'Create PurchaseItem', 'url'=>array('create')),
	array('label'=>'Manage PurchaseItem', 'url'=>array('admin')),
);
?>

<h1>Purchase Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
