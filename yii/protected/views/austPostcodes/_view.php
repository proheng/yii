<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pcode')); ?>:</b>
	<?php echo CHtml::encode($data->Pcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Locality')); ?>:</b>
	<?php echo CHtml::encode($data->Locality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('State')); ?>:</b>
	<?php echo CHtml::encode($data->State); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comments')); ?>:</b>
	<?php echo CHtml::encode($data->Comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeliveryOffice')); ?>:</b>
	<?php echo CHtml::encode($data->DeliveryOffice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PresortIndicator')); ?>:</b>
	<?php echo CHtml::encode($data->PresortIndicator); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ParcelZone')); ?>:</b>
	<?php echo CHtml::encode($data->ParcelZone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BSPnumber')); ?>:</b>
	<?php echo CHtml::encode($data->BSPnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BSPname')); ?>:</b>
	<?php echo CHtml::encode($data->BSPname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Category')); ?>:</b>
	<?php echo CHtml::encode($data->Category); ?>
	<br />

	*/ ?>

</div>