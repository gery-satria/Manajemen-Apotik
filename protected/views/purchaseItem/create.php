<?php
/* @var $this PurchaseItemController */
/* @var $model PurchaseItem */

$this->breadcrumbs=array(
	'Purchase Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PurchaseItem', 'url'=>array('index')),
	array('label'=>'Manage PurchaseItem', 'url'=>array('admin')),
);
?>

<h1>Create PurchaseItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>