<?php
include("./includes/header.inc"); ?>

<article>
	<header>
	
<h1><?php echo $page->sk_rite_id ?></h1>	

<!-- SFG: show sk_remote_image if exitst on db -->
<?php
	if ($page->sk_remote_image){
	?>
		<img src="<?php echo $page->sk_remote_image; ?>">
	<?php
		}
?>
<!-- / end of sk_remote_image -->

<!-- SFG: video embed via field sk_video_embed -->
		<?php
		if ($page->sk_video_embed) {
		    $value = "<p>" . $page->sk_video_embed . "</p>";
		    $modules->get('TextformatterVideoEmbed')->format($value);
		    if (strpos($value, "<p>") !== 0) echo $value;
		}
		?>
<!-- /video embed -->

<!-- SFG: next / prev page -->		
		<?php
			if($page->prev->id) {echo "<p class='prev'><a href='{$page->prev->url}'>prev</a></p>";}
			if($page->next->id) {echo "<p class-'next'><a href='{$page->next->url}'>next</a></p>";}
		?>
<!-- /end next / prev page -->

		<h1><?php echo $title; ?></h1>
	</header>

<!-- SFG: insert google spreadsheet data. TODO: extract correct row -->
	<?php insertGoogle() ?>
<!-- /end of google spreadsheet -->


<!-- use checkbox to add css class to elements -->
<?php
if ($page->sk_textlight == 1) // 1 is checked, 0 is unchecked
echo "TODO: add css class 'textlight'";
?>		
		<div>
			<p><?php echo $texarea; ?></p>
		</div>

<!-- SFG: add class 'active' to first item -->
	<?php
	$active = ' active'; // set active for first item
	foreach($images as $image) {
		$image_url = $image->url;
	 ?>
	    <div class="item<?php echo $active; ?>">
	        <img src="<?php echo $image_url; ?>" />
	        <div class="container">
	            <div class="carousel-text">
	                <h2><?php echo $texarea; ?></h2>
	            </div><!-- /carousel-text -->
	        </div><!-- /container -->
	    </div><!-- /item -->
	    <?php
	    $active = ''; // remove class "active" for following items
	}
	?>	
</article>

<?php
include("./includes/footer.inc");