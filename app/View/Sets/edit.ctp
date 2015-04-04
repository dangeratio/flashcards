<div class="sets form">
	<div id='title'><?php echo __('Edit Set'); ?></div>
	<fieldset>
		<?php echo $this->Form->create('Set'); ?>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('name');
			//echo $this->Form->input('Test');
		?>
	</fieldset>
<?php echo $this->Form->end(array('label'=>'Submit', 'class'=>'actionbutton')); ?>
</div>
