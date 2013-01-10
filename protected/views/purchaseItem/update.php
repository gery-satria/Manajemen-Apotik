<?php
/* @var $this PurchaseItemController */
/* @var $model PurchaseItem */

$this->breadcrumbs=array(
	'Purchase Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PurchaseItem', 'url'=>array('index')),
	array('label'=>'Create PurchaseItem', 'url'=>array('create')),
	array('label'=>'View PurchaseItem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PurchaseItem', 'url'=>array('admin')),
);
?>

<h1>Update PurchaseItem <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>