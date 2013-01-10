<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs=array(
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('unit-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Manage Unit</h2>

<?php echo CHtml::link('Create Unit', array('/unit/create'), array('style'=>'text-decoration:none')); ?> ||

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button', 'style'=>'text-decoration:none')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'unit-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update} {delete}',
		),
	),
)); ?>