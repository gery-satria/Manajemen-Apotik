<?php
/* @var $this MedicineController */
/* @var $model Medicine */

$this->breadcrumbs=array(
	'Medicine'=>array('index'),
	'Update',
);
?>

<h2>Update Medicine <?php echo $model->name; ?></h2>

<?php echo CHtml::link('List Medicine', array('/medicine'), array('style'=>'text-decoration:none')) . "<br /><br />"; ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>