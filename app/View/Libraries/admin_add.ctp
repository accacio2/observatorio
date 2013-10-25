<div class="libraries form">
<?php echo $this->Form->create('Library'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Biblioteca'); ?></legend>
	<?php
		echo $this->Form->input('odm');
		echo $this->Form->input('categoria');
		echo $this->Form->input('título');
		echo $this->Form->input('imagem');
		echo $this->Form->input('arquivo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>