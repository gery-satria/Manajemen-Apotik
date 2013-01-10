<?php
/* @var $this SaleItemController */
/* @var $data SaleItem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_id')); ?>:</b>
	<?php echo CHtml::encode($data->sale_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicine_id')); ?>:</b>
	<?php echo CHtml::encode($data->medicine_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costumer_id')); ?>:</b>
	<?php echo CHtml::encode($data->costumer_id); ?>
	<br />


</div>