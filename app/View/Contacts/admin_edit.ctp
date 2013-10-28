<div class="contacts form">
<?php echo $this->Form->create('Contato'); ?>
	<fieldset>
		<legend><?php echo __('Editar Contato'); ?></legend>
	<?php
		echo $this->Form->input('id_contato');
		echo $this->Form->input('data');
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('mensagem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>