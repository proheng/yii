<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aust-postcodes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pcode'); ?>
		<?php echo $form->textField($model,'Pcode'); ?>
		<?php echo $form->error($model,'Pcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Locality'); ?>
		<?php echo $form->textField($model,'Locality',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Locality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'State'); ?>
		<?php echo $form->textField($model,'State',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'State'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Comments'); ?>
		<?php echo $form->textField($model,'Comments',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Comments'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeliveryOffice'); ?>
		<?php echo $form->textField($model,'DeliveryOffice',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'DeliveryOffice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PresortIndicator'); ?>
		<?php echo $form->textField($model,'PresortIndicator',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'PresortIndicator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ParcelZone'); ?>
		<?php echo $form->textField($model,'ParcelZone',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ParcelZone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BSPnumber'); ?>
		<?php echo $form->textField($model,'BSPnumber',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'BSPnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BSPname'); ?>
		<?php echo $form->textField($model,'BSPname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'BSPname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Category'); ?>
		<?php echo $form->textField($model,'Category',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Category'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->