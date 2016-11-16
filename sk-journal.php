<?php
include("./includes/header.inc"); ?>

	<article>
		<header>
<!-- SFG: materialize slider -->
<script>
    $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
</script>

<!-- materialise slider -->
	<div class="slider">
		<ul class="slides">
			<?php
			foreach($images as $image) {
				$image_url = $image->url;
			?>
			<li>
				<img src="<?php echo $image_url; ?>" />
				<div class="caption center-align">
					<h3><?php echo $texarea; ?></h3>
					<h5><?php echo $title; ?></h5>
				</div>
			</li>
			<?php
				}
			?>
		</ul>
	</div>
<!-- /materialise slider -->	
	
			<h1><?php echo $title; ?></h1>
		<?php
			if($page->prev->id) {echo "<p class='prev'><a href='{$page->prev->url}'>prev</a></p>";}
			if($page->next->id) {echo "<p class-'next'><a href='{$page->next->url}'>next</a></p>";}
		?>

		</header>
		
<!-- SFG: use checkbox to add css class to elements -->
<?php
if ($page->sk_cb_textlight == 1) // 1 is checked, 0 is unchecked
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
<!-- /active class to first item -->



<!-- SFG: show all images -->		
<!--
<?php 
	foreach($images as $image) {
		$image_url = $image->width(150)->url;
?>
			<p><img src="<?php echo $image_url; ?>" alt="Image" /></p>

<?php 
	}
 ?>
-->
	</article>

<?php
include("./includes/footer.inc");