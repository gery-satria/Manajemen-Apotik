<?php
/* @var $this MedicineSupplierController */
/* @var $model MedicineSupplier */

$this->breadcrumbs=array(
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('medicine-supplier-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Manage Medicine Supplier</h2>

<?php echo CHtml::link('Create Medicine Supplier', array('/medicineSupplier/create'), array('style'=>'text-decoration:none')); ?>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">
<?php //$this->renderPartial('_search',array(
	//'model'=>$model,
//)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'medicine-supplier-grid',
	'dataProvider'=>$model->with('medicine','supplier')->search(),
	'filter'=>$model,
	'cssFile'=>Yii::app()->request->baseUrl . '/css/styles.css',
	'columns'=>array(
		array(
                    'name'=>'medicineName',
                    'value'=>'$data->medicine->name',
                ),
                array(
                    'name'=>'supplierName',
                    'value'=>'$data->supplier->company_name'
                ),
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update} {delete}',
		),
	),
)); ?>
