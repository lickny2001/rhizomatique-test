<?php
include("./includes/header.inc"); ?>

<?php
/* SFG: check: this line has to be here, cant be in functions.pnp. why? */
$items = $pages->find('template=sk-rite|sk-journal, limit=0, sort=-created');
?>
<div class="page-wrap">
	<div>
		<?php 
			for($n = 0, $nn = $items->count(); $n < $nn; $n++) {
/* SFG: outputs value of sk_cb_textlight & sk_cb_fullwidth checkbox to use to change textcolor & fullwidth card			 */
			if($items->eq($n)->sk_cb_textlight !=1 ) { 
				$textlight = '';
			} else {
				$textlight = ' textlight';
			}
			if($items->eq($n)->sk_cb_fullwidth !=1 ) { 
				$fullwidth = '';
			} else {
				$fullwidth = ' fullwidth';
			}
		?>
			<a href="<?php echo $items->eq($n)->url; ?>">
				<div class="card<?php echo $textlight . $fullwidth; ?>" style="background-image: url(<?php echo $items->eq($n)->sk_main_image->url;?>);">
				<?php echo $items->eq($n)->title; ?>	
			
<!-- <img class="card img" src="<?php echo $items->eq($n)->sk_main_image->url;?>"> -->
				</div>
			</a>
		<?php
		}
		?>
	</div>
</div> <!-- end of page-wrap -->
	
<?php
include("./includes/footer.inc");
?>