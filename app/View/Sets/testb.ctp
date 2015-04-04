<table class='card'><tr><td class='frame'>

	<div>
		<div id='title'></div>
		<table cellpadding="0" cellspacing="0" id="select">
			<tr><td>Front</td></tr>
			<tr><td class='card'><? echo h($card['cards']['front']); ?></td></tr>
		</table>
	</div>

</td><td>&nbsp;</td><td class='frame'>

	<div>
		<div id='title'></div>
		<table cellpadding="0" cellspacing="0" id="select">
			<tr><td>Back</td></tr>
			<tr><td class='card'><? echo h($card['cards']['back']); ?></td></tr>
		</table>
	</div>

</td></tr></table>

<?

echo $this->Form->create('sets', array('action' => 'test/'.$card['cards']['set_id']));
echo $this->Form->end(array('label'=>'Next', 'id'=>'NextButton', 'class'=>'actionbutton'));

?>
<a href='/flashcards/' class='return'>Return</a>



<script type="text/javascript">
document.getElementById("NextButton").focus();
</script>
