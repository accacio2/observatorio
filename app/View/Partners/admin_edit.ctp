<div class="partners form">
<?php echo $this->Form->create('Partner'); ?>
	<fieldset>
		<legend><?php echo __('Editar Parceiro'); ?></legend>
	<?php
		echo $this->Form->input('id_parceiro');
		echo $this->Form->input('nome');
		echo $this->Form->input('endereco');
		echo $this->Form->input('telefone');
		echo $this->Form->input('email');
		echo $this->Form->input('link');
		echo $this->Form->input('imagem', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Editar')); ?>
</div>

