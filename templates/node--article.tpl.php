<?php
/**
 * Variables used here is defined in
 * zen_sub_preprocess_node()
*/
 ?>
<article class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 image-wrapper">
			<img src="" data-src="<?php echo $uri; ?>" alt="" class="background-image image-filter">
			<div class="box golden-ratio">
				<div class="inner text-center">
					<span class="centerised-block">
						<h3 class="title"><?php print $title; ?></h3>
						<h4 class="caption"><?php print render($content["field_caption"]); ?></h4>
						<p class="scroll-navigator"><i class="fa fa-arrow-down"></i></p>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row article-body">
		<?php print render($content["body"]); ?>
	</div>
</article>
