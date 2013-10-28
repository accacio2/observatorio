<div class="contacts form">
<?php echo $this->Form->create('Contact'); ?>
	<fieldset>
		<legend><?php echo __('Adicionar Contatos'); ?></legend>
	<?php
		echo $this->Form->input('data');
		echo $this->Form->input('nome');
		echo $this->Form->input('email');
		echo $this->Form->input('mensagem');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Cadastrar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Painel'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Contatos'), array('action' => 'index')); ?></li>
	</ul>
</div>
