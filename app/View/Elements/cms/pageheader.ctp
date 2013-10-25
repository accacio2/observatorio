<div class="page-header">
	<div class="row">
		<div class="col-md-6 col-sm-6">
			<h1><?php echo $name; ?></h1>
		</div>
		<?php if ($button): ?>
		<div class="col-md-3 col-sm-3<?php echo $is_save === false ? ' col-md-offset-3 col-sm-offset-3' : ''; ?>">
			<?php
			echo
				$this->Html->link(
					$button,
					array(
						'controller' 			=> $controller,
						'action' 				=> $action,
						'painel' 				=> true
					),
					array(
						'title' 				=> $button,
						'class'					=> 'btn btn-block btn-' . $class,
						'escape' 				=> false
					)
				);
			?>

		</div>
		<?php endif; ?>

		<?php if ($is_save): ?>
		<div class="col-md-3 col-sm-3">
			<a onclick="$('#form').submit();" title="Salvar" class="btn btn-block btn-success">Salvar</a>
		</div>
		<?php endif; ?>
	</div>
</div>
