<?php
/* @var $this SupplierController */
/* @var $model Supplier */

$this->breadcrumbs=array(
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('supplier-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Manage Supplier</h2>

<?php echo CHtml::link('Create Supplier', array('/supplier/create'), array('style'=>'text-decoration:none')); ?>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">
<?php //$this->renderPartial('_search',array(
	//'model'=>$model,
//)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'supplier-grid',
    	'dataProvider'=>$model->search(),
	'filter'=>$model,
        'cssFile'=>Yii::app()->request->baseUrl . '/css/styles.css',
	'columns'=>array(
		'company_name',
		'address',
		'phone',
		'email',
		'contact_person',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update} {delete}',
		),
	),
)); ?>
