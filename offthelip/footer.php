			</div>
			<hr>
			<div class='footer'>
				<div class='row-fluid'>
					<div class='span6'>
						<small>by Boundless Ether, LLC</small>
					</div>
					<div class='span1 pull-right'>
						&copy; 2013
					</div>
				</div>
			</div>
		</div>
		<script src='<?=SITE_ROOT?>js/jquery-1.8.0.min.js'></script>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
		<?php if(is_array($site['js'])) foreach($site['js'] as $file): ?>
            <script src="<?=SITE_ROOT?>js/<?= $file ?>"></script>
        <?php endforeach; ?>
	</body>
</html>