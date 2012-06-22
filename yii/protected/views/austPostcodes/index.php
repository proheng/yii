<?php
$this->breadcrumbs=array(
	'Australia Postcodes',
);

$this->menu=array(
	array('label'=>'Create AustPostcodes', 'url'=>array('create')),
	array('label'=>'Manage AustPostcodes', 'url'=>array('admin')),
);
?>

<h1>Aust Postcodes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
