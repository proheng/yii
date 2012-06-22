<?php
$this->breadcrumbs=array(
	'Aust Postcodes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AustPostcodes', 'url'=>array('index')),
	array('label'=>'Manage AustPostcodes', 'url'=>array('admin')),
);
?>

<h1>Create AustPostcodes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>