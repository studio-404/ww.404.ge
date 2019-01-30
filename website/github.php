
<div class="container_ nomargin nopadding">

<?php
foreach ($github as $git) {
	?>
	<div class="project-item" 
		onclick="window.open('<?=$git['url']?>','_blank');"
		onmouseover="Studio404.hoverChangeBg(this)" 
		onmouseleave="Studio404.outChangeBg(this)">
		<p>
			<?=$git['title']?><br />
			<em><?=$git['sub_title']?></em>
		</p>
	</div>
	<?php
}
?>

</div>