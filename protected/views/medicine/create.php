<?php
/* @var $this MedicineController */
/* @var $model Medicine */

$this->breadcrumbs=array(
	'Medicine'=>array('index'),
	'Create',
);
?>

<h2>Create Medicine</h2>

<?php echo CHtml::link('List Medicine', array('/medicine'), array('style'=>'text-decoration:none')) . "<br /><br />"; ?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>