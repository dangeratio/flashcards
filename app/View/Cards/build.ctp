<div>
	<div id='title'>Add Cards (<? echo $total[0][0]['total']; ?>)</div>
	<fieldset>
		<?php
			echo $this->Form->create('Card');
			echo $this->Form->input('front');
			echo $this->Form->input('back');
			echo $this->Form->input('set_id', array('selected'=>$this->Session->read('Active.SetId'), 'style'=>'display:hidden;'));
			echo $this->Form->end(__('Submit'));
		?>
		<a href='/flashcards/' class='return'>Return</a>
	</fieldset>
</div>
<script type="text/javascript">
document.getElementById("CardFront").focus();
</script>
