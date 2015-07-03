<?php
/**
 * Variables used here is defined in
 * zen_sub_preprocess_views_view_fields()
*/
?>
<a href="<?php print $path; ?>" class="colorbox-node">
	<div class="col-xs-12 col-sm-6 image-wrapper">
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
