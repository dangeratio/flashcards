<table class='frame'><tr><td class='frame'>

	<div>
		<div id='title'></div>
		<table cellpadding="0" cellspacing="0" id="select">
			<tr><td>Front</td></tr>
			<tr><td class='card'><? echo h($card['cards']['front']); ?></td></tr>
		</table>
	</div>

</td></tr></table>

<?

//$card['cards']['id']
echo $this->Form->create('sets', array('action' => 'testb/'.$card['cards']['id']));
echo $this->Form->end(array('label'=>'Flip', 'id'=>'FlipButton', 'class'=>'actionbutton'));

?>
<a href='/flashcards/' class='return'>Return</a>

<script type="text/javascript">
document.getElementById("FlipButton").focus();
</script>
