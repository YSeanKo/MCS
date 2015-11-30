<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('departDate')); ?>:</b>
    <?php echo CHtml::encode($data->departDate); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('arrivalDate')); ?>:</b>
    <?php echo CHtml::encode($data->arrivalDate); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('departTime')); ?>:</b>
    <?php echo CHtml::encode($data->departTime); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('arrivalTime')); ?>:</b>
    <?php echo CHtml::encode($data->arrivalTime); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('departLocation')); ?>:</b>
    <?php echo CHtml::encode($data->departLocation); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('arrivalLocation')); ?>:</b>
    <?php echo CHtml::encode($data->arrivalLocation); ?>
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distance')); ?>:</b>
	<?php echo number_format(CHtml::encode($data->distance),1)." KM" ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dutyType')); ?>:</b>
	<?php echo CHtml::encode($data->dutyType); ?>
	<br /><br />

    <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('departCity')); ?>:</b>
	<?php echo CHtml::encode($data->departCity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departCityLat')); ?>:</b>
	<?php echo CHtml::encode($data->departCityLat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departCityLng')); ?>:</b>
	<?php echo CHtml::encode($data->departCityLng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destinationCity')); ?>:</b>
	<?php echo CHtml::encode($data->destinationCity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destinationCityLat')); ?>:</b>
	<?php echo CHtml::encode($data->destinationCityLat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destinationCityLng')); ?>:</b>
	<?php echo CHtml::encode($data->destinationCityLng); ?>
	<br />

	*/ ?>

</div>