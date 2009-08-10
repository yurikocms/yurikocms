<?php
/**
 * Default Admin Template
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo assets::all(); ?>
<title><?php echo $title; ?></title>
</head>

<body>
    <div class="container_16 clear" id="main_frame">
		<!-- BEGIN SECTION -->
		<div class="grid_16 section header">
			 <?php foreach(section::get('Header') as $node): ?>
				<?php echo $node; ?>
			<?php endforeach; ?>
		</div>
		<!-- END SECTION -->
		<!-- BEGIN SECTION -->
		<div class="grid_16 section sub-header">
			 <?php foreach(section::get('Sub-Header') as $node): ?>
				<?php echo $node; ?>
			<?php endforeach; ?>
		</div>
		<!-- END SECTION -->
		<!-- BEGIN SECTION -->
		<div class="grid_12 section content">
			<?php foreach(section::get('Main Content') as $node): ?>
				<?php echo $node; ?>
			<?php endforeach; ?>
		</div>
		<!-- END SECTION -->
		<!-- BEGIN SECTION -->
		<div class="grid_4 section side_panel">
			<?php foreach(section::get('Side Panel') as $node): ?>
				<?php echo $node; ?>
			<?php endforeach; ?>
		</div>
		<!-- END SECTION -->
		<!-- BEGIN SECTION -->
		<div class="grid_16 section gutter">
			<?php foreach(section::get('Gutter') as $node): ?>
				<?php echo $node; ?>
			<?php endforeach; ?>
		</div>
		<!-- END SECTION -->
    </div>
</body>
</html>