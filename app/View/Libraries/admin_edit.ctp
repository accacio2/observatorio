<div class="libraries form">
<?php echo $this->Form->create('Library'); ?>
	<fieldset>
		<legend><?php echo __('Editar Biblioteca'); ?></legend>
	<?php
		echo $this->Form->input('odm');
		echo $this->Form->input('categoria');
		echo $this->Form->input('titulo');
		echo $this->Form->input('imagem');
		echo $this->Form->input('arquivo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
