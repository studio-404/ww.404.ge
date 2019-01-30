
<div class="container_ nomargin nopadding">

<?php
foreach ($android as $pro) {
	?>
	<div class="project-item" 
		onclick="window.open('<?=$pro['url']?>','_blank');"
		onmouseover="Studio404.hoverChangeBg(this)" 
		onmouseleave="Studio404.outChangeBg(this)">
		<p>
			<?=$pro['title']?><br />
			<em><?=$pro['sub_title']?></em>
		</p>
	</div>
	<?php
}
?>

</div>