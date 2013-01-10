<?php
/* @var $this StockHistoryController */
/* @var $model StockHistory */

$this->breadcrumbs=array(
	'Stock Histories'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StockHistory', 'url'=>array('index')),
	array('label'=>'Create StockHistory', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('stock-history-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Stock Histories</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'stock-history-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'medicine_id',
		'amount',
		'last_update',
		'officer',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
