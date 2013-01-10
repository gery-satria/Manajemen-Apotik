<?php
/* @var $this PurchaseItemController */
/* @var $data PurchaseItem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_id')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicine_id')); ?>:</b>
	<?php echo CHtml::encode($data->medicine_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_per_unit')); ?>:</b>
	<?php echo CHtml::encode($data->price_per_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_id); ?>
	<br />


</div>