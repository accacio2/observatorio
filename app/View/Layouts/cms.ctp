<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout; ?> | OBSERVATÓRIO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Styles -->
	<?php echo $this->Html->css('cms/theme'); ?>

	<?php echo $this->Html->meta('/img/cms/favicon.ico', '/img/cms/icon.png', array('type' => 'icon'), true); ?>

	<![endif]-->

</head>
<body>
    <?php 
	
    if ($this->Session->read('Auth.Admin')):

    echo $this->element('cms/navbar');

    echo $this->element('cms/sidebar');

    ?>

	<div class="content col-md-10">

		<?php
		echo
			$this->element(
				'cms/pageheader',
				array(
					'name' 			=> $title_for_layout,
					'controller' 	=> isset($controller) ? $controller : $this->params['controller'],
					'action' 		=> isset($action) ? $action : false,
					'button' 		=> isset($button) ? $button : false,
					'class'			=> isset($class) ? $class : false,
					'is_save'		=> isset($is_save) ? $is_save : false
				)
			);
		?>

        <?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

	</div>
	<?php else: ?>
	<?php echo $this->fetch('content'); ?>

	<?php endif; ?>

	<!-- Scripts -->
	<?php echo $this->Html->script('lib/jquery.min'); ?>

	<?php echo $this->Html->script('lib/bootstrap.min'); ?>

	<?php echo $this->Html->script('cms/plugins'); ?>

	<?php if ($this->params['controller'] == 'home'): ?>
	<script type="text/javascript">
    <?php echo Highchart::setOptions($theme); ?>

    <?php echo $chart->render("chart"); ?>
	</script>
	<?php endif; ?>

	<?php echo $this->Html->script('cms/tinymce/tinymce.min'); ?>

	<?php echo $this->Html->script('cms/theme'); ?>

</body>
</html>