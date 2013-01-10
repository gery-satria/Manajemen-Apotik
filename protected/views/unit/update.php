<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs=array(
	'Unit'=>array('index'),
	'Update',
);
?>

<h2>Update Unit <?php echo $model->name; ?></h2>

<?php echo CHtml::link('List Unit', array('/unit'), array('style'=>'text-decoration:none')) . "<br /><br />"; ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>