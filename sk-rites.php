<?php
include("./includes/header.inc"); ?>
<!--
	<nav>
		<p><a href="<?php echo $parent_url ?>"><?php echo $parent_title ?></a></p>
	</nav>
-->
<!--
	<header>
		<h1><?php echo $title; ?></h1>
	</header>
-->

	<div> <!-- grab & show sk_main_image or sk_remote_image if exists -->
		<?php 
			for($n = 0, $nn = $riteitems->count(); $n < $nn; $n++) {
		?>
		<div class="item">
			<a href="<?php echo $riteitems->eq($n)->url; ?>">
			<?php echo $riteitems->eq($n)->title; ?>
			
		<?php
			if ($riteitems->eq($n)->sk_remote_image) { // if theres a remote image
		?> 
			<img src="<?php echo $riteitems->eq($n)->sk_remote_image; ?>">
		<?php } else {
		?>				
			<img src="<?php echo $riteitems->eq($n)->sk_main_image->url;?>">
			</a>
		</div>
		<?php
			}
		}
		?>
	</div>


<!--

		<ul>
<?php 
for($n = 0, $nn = $items->count(); $n < $nn; $n++) {
 ?>
 			<li><a href="<?php echo $items->eq($n)->url; ?>"><?php echo $items->eq($n)->title; ?>
 			
 			 				<img src="<?php echo $items->eq($n)->sk_main_image->url; ?>">
 			</a></li>

 <?php 
}
 ?>
		</ul>
-->

<!--


</body>
</html>
-->


<?php
include("./includes/footer.inc");