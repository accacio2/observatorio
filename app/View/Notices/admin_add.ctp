<div class="notices form">
<?php echo $this->Form->create('Notice'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Notícia'); ?></legend>
	<?php
		echo $this->Form->input('odm');
		echo $this->Form->input('titulo');
		echo $this->Form->input('imagem', array('type' => 'file'));
		echo $this->Form->input('breveDescricao');
		echo $this->Form->input('noticiaNaIntegra');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>
