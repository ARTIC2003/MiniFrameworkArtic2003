<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $data['page_tag']?></title>
</head>
<body>
	<?php 
		dep($data);
	?>
	<section id="<?php echo $data['page_id']?>">
	<h1><?php echo $data['page_title']?></h1>

	<p><?php echo $data['page_content']?></p>
	</section>

	<!-- <?php echo passGenerator(); ?> -->
	<?php echo DOLLAR . formatMoney(52500); ?>
	<!-- <?php echo base_url(); ?> -->
</body>
</html>