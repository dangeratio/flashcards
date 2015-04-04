<div>
	<div id='title'>Sets</div>
	<table id="select">
	<tbody>
	<?php foreach ($sets as $set): ?>
	<tr>
		<td><?php echo h($set['Set']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Test'), array('action' => 'test', $set['Set']['id'])); ?>
			<?php echo $this->Html->link(__('Add Cards'), array('action' => 'sel', $set['Set']['id'])); ?>
			<?php echo $this->Html->link('Edit', array('action' => 'edit', $set['Set']['id'])); ?>
			<?php echo $this->Form->postLink('Delete', array('action' => 'delete', $set['Set']['id']), array(), __('Are you sure you want to delete # %s?', $set['Set']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	<tr>
		<td colspan='2'>
			<?php echo $this->Html->link('+ New Set', array('controller'=>'sets', 'action' => 'add'), array('class'=>'action')); ?>
		</td>
	</tr>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<script type='text/javascript'>
$(document).ready(function() {
    $('a').hover(function() {
			$(this).fadeTo(3, 0.5);
		}, function() {
			$(this).fadeTo(3, 1);
		});

});
</script>
