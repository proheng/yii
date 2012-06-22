<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pcode'); ?>
		<?php echo $form->textField($model,'Pcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Locality'); ?>
		<?php echo $form->textField($model,'Locality',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Comments'); ?>
		<?php echo $form->textField($model,'Comments',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DeliveryOffice'); ?>
		<?php echo $form->textField($model,'DeliveryOffice',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PresortIndicator'); ?>
		<?php echo $form->textField($model,'PresortIndicator',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ParcelZone'); ?>
		<?php echo $form->textField($model,'ParcelZone',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BSPnumber'); ?>
		<?php echo $form->textField($model,'BSPnumber',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'BSPname'); ?>
		<?php echo $form->textField($model,'BSPname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Category'); ?>
		<?php echo $form->textField($model,'Category',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->