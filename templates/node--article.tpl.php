<?php 
//Get image url
$node = node_load($nid);
$imageUrl = file_create_url($node->field_image['und'][0]['uri']);
$uri = render($imageUrl);
?>

<article class="container-fluid">
	<div class="row">
		<div class="col-sm-12 image-wrapper">
			<img src="" data-src="<?php echo $uri; ?>" alt="" class="background-image">
			<div class="box golden-ratio">
				<div class="inner text-center">
					<span class="centerised-block">
						<h3 class="title"><?php print $title; ?></h3>
						<h4 class="caption"><?php print render($content["field_caption"]); ?></h4>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row article-body">
		<?php print render($content["body"]); ?>		
	</div>
</article>