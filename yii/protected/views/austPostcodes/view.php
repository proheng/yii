<?php
$this->breadcrumbs=array(
	'Aust Postcodes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AustPostcodes', 'url'=>array('index')),
	array('label'=>'Create AustPostcodes', 'url'=>array('create')),
	array('label'=>'Update AustPostcodes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AustPostcodes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AustPostcodes', 'url'=>array('admin')),
);
?>

<h1>View AustPostcodes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Pcode',
		'Locality',
		'State',
		'Comments',
		'DeliveryOffice',
		'PresortIndicator',
		'ParcelZone',
		'BSPnumber',
		'BSPname',
		'Category',
	),
)); ?>
