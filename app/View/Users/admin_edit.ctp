<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usu�rio'); ?></legend>
	<?php
		echo $this->Form->input('id_usuario');
		echo $this->Form->input('tipo');
		echo $this->Form->input('login');
		echo $this->Form->input('senha', array('type' => 'password'));
		echo $this->Form->input('lembreteSenha');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>
