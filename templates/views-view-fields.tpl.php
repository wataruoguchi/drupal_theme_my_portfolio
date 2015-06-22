<?php 
/**
 * Drupal 7 - How to create a Custom Template for a View
 * http://www.wdtutorials.com/drupal-7/drupal-7-how-to-create-custom-template-view#.VYS33BNVhBe
 * 
 * How to remove the innermost span/div with the field-content class  #3
 * https://www.drupal.org/node/1134106
 * 
 * Get a row number
 * http://drupal.stackexchange.com/questions/19207/how-do-i-get-view-the-actual-row-number
 * <?php if(isset($view)) {echo $view->row_index;} ?>
 * 
 * Get an image's url
 * http://drupal.stackexchange.com/questions/6322/strict-warning-only-variables-should-be-passed-by-reference-in-include
 * 
 * Strict warning
 * http://drupal.stackexchange.com/questions/6322/strict-warning-only-variables-should-be-passed-by-reference-in-include
 * 
*/
//Get content url
global $base_url;
$nid = $fields["nid"]->content;
$path = drupal_get_path_alias($base_url."/node/".$nid);

//Get image url
$node = node_load($nid);
$imageUrl = file_create_url($node->field_image['und'][0]['uri']);
$uri = render($imageUrl);

?>
<a href="<?php print $path; ?>" class="colorbox-node">
	<div class="col-sm-6 image-wrapper">
		<img src="" data-src="<?php echo $uri; ?>" alt="" class="background-image mouseover-image-zoom mouseover-image-filter">
		<div class="box golden-ratio">
			<div class="inner text-center">
				<span class="centerised-block">
					<h3 class="title"><?php print $fields["title"]->content; ?></h3>
					<h4 class="caption"><?php print $fields["field_caption"]->content; ?></h4>
				</span>
			</div>
		</div>
	</div>
</a>