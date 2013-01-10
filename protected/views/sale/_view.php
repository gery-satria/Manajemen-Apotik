<?php
/* @var $this SaleController */
/* @var $data Sale */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_date')); ?>:</b>
	<?php echo CHtml::encode($data->sale_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_item')); ?>:</b>
	<?php echo CHtml::encode($data->total_item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_price')); ?>:</b>
	<?php echo CHtml::encode($data->total_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officer_id')); ?>:</b>
	<?php echo CHtml::encode($data->officer_id); ?>
	<br />


</div>