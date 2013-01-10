<?php
/* @var $this MedicineController */
/* @var $data Medicine */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_id')); ?>:</b>
	<?php echo CHtml::encode($data->unit_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_price')); ?>:</b>
	<?php echo CHtml::encode($data->sale_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('current_stock')); ?>:</b>
	<?php echo CHtml::encode($data->current_stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_discount')); ?>:</b>
	<?php echo CHtml::encode($data->member_discount); ?>
	<br />


</div>