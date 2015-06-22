<?php 
$title = $view->get_title();
 ?>
<div class="section">
	<div class="row">
		<div class="col-sm-6">
			<div class="box golden-ratio">
				<div class="inner">
					<div class="centerised-block">
						<h3 class="sec-title text-center"><?php print $title; ?></h3>
					</div>
				</div>
			</div>
		</div>
		<?php print $rows; ?>
	</div>
	<div class="row  just-margin">
	</div>
</div>