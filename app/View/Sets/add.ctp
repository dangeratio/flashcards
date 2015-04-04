<div class="sets form">
<div id='title'>Add Set</div>
	<fieldset>
		<? echo $this->Form->create('Set'); ?>
		<? echo $this->Form->input('name'); ?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Submit', 'class'=>'actionbutton')); ?>
</div>
