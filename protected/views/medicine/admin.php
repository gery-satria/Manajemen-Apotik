<?php
/* @var $this MedicineController */
/* @var $model Medicine */

$this->breadcrumbs=array(
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('medicine-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Manage Medicine</h2>

<?php echo CHtml::link('Create Medicine', array('/medicine/create'), array('style'=>'text-decoration:none')); ?>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">
<?php //$this->renderPartial('_search',array(
	//'model'=>$model,
//)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'medicine-grid',
	'dataProvider'=>$model->with('unit')->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->request->baseUrl . '/css/styles.css',
	'columns'=>array(
		'name',
		array('name'=>'unitName',
                    'value'=>'$data->unit->name'),
                array('name'=>'sale_price',
                    'value'=>'"Rp. " . $data->sale_price'),
		'current_stock',
                array('name'=>'member_discount',
                    'value'=>'$data->member_discount . "%"'),
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update} {delete}',
		),
	),
)); ?>
