<?php 

$title = $page->title;
$parent_title = $page->parent->title;
$parent_url = $page->parent->url;

$riteitems = $pages->find('template=sk-rites')->eq(0)->children('template=sk-rite, sort=-sort');
$journalitems = $pages->find('template=sk-journals')->eq(0)->children('template=sk-journal, sort=-sort');
/* $items = $pages->find('template=sk-rites|sk-journals, limit=0, sort=sort')->children('template=sk-rite|sk-journal, limit=8, sort=sort'); */

/* SFG: needs to be in home.php to work */
/* $items = $pages->find('template=sk-rite|sk-journal, limit=0, sort=-created'); */

/* $items = $pages->find('template=sk-rites')->eq(0)->children('template=sk-rite, sort=-sort'); */
/* $items->import($journalitems); */

/*
$david = $pages->get("/architects/david-childs/");
$renzo = $pages->get("/architects/renzo-piano/");
$skyscrapers = $pages->find("architect=$david|$renzo, sort=-height");
*/


/* SFG: getting to google spreadsheet */
function insertGoogle() {
$url = 'https://spreadsheets.google.com/feeds/list/1rL5rRu6oIXwGeijlOmwYeXnUJ5auSpON8Icbog_M0E4/1/public/values?alt=json';
$file= file_get_contents($url);
$json = json_decode($file);
$rows = $json->{'feed'}->{'entry'};
	foreach($rows as $row) {
	  echo '<p>';
	  $riteid = $row->{'gsx$riteid'}->{'$t'};
	  $title = $row->{'gsx$title'}->{'$t'};
	  $temp = $row->{'gsx$temp'}->{'$t'};
	  $h2o = $row->{'gsx$h2o'}->{'$t'};
	  $nacl = $row->{'gsx$nacl'}->{'$t'};
	  $lumen = $row->{'gsx$lumen'}->{'$t'};
	  $period = $row->{'gsx$period'}->{'$t'};
	  $quantity = $row->{'gsx$quantity'}->{'$t'};
	  echo $riteid . ' | ' . $title . ' |' . ' temp: ' . $temp . ' | h2o: ' . $h2o . ' etc ... <br>';
	  echo '</p>';
	}
}


/*
// Using an array or object
$n = (integer) $page->sk_page_identifier;
echo $rows[$n];
echo $rows->get([$n]);
echo $rows->eq([$n]);

$json->{'feed'}->{'entry'}->{'row' . $page->sk_page_identifier}-
*/

function sk_get_title($input_page, $input_n) {
	$n = (int) $input_n;
	$page = $input_page;

	$nn = $page->sk_page_identifier;

	return $nn;
}

echo sk_get_title($page, 0);

$texarea = $page->sk_textarea;
$images = $page->sk_image;
$url = $page->sk_url;
$text = $page->Text;
$videoembed = $page->sk_video_embed;
$logo = $pages->get('/')->sk_logo->width(200)->url();


?>