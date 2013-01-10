<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs=array(
	'Unit'=>array('index'),
	'Create',
);

?>

<h2>Create Unit</h2>

<?php echo CHtml::link('List Unit', array('/unit'), array('style'=>'text-decoration:none')) . "<br /><br />"; ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>