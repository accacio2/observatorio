<div class="partners view">
<h2><?php echo __('Parceiro'); ?></h2>
	<dl>
		<dt><?php echo __('Id Parceiro'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['id_parceiro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['imagem']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
