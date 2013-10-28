<div class="contacts view">
<h2><?php echo __('Contato'); ?></h2>
	<dl>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensagem'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['mensagem']); ?>
			&nbsp;
		</dd>
	</dl>
</div>