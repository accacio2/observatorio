<div class="notices view">
<h2><?php echo __('Noticia'); ?></h2>
	<dl>
		<dt><?php echo __('Odm'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['odm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imagem'); ?></dt>
        <dd>
        <?php echo h($notice['Notice']['imagem']); ?>
        &nbsp;
        </dd>
		<dt><?php echo __('BreveDescricao'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['breveDescricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NoticiaNaIntegra'); ?></dt>
		<dd>
			<?php echo h($notice['Notice']['noticiaNaIntegra']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

