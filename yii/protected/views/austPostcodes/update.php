<?php
$this->breadcrumbs=array(
	'Aust Postcodes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AustPostcodes', 'url'=>array('index')),
	array('label'=>'Create AustPostcodes', 'url'=>array('create')),
	array('label'=>'View AustPostcodes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AustPostcodes', 'url'=>array('admin')),
);
?>

<h1>Update AustPostcodes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>