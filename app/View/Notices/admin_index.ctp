<div class="notices index">
	<h2><?php echo __('Notícias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	
		<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Cadastrar Notícia'), array('action' => 'add')); ?></li>
	</ul>
	</div>	
	
	<tr>
			<th><?php echo $this->Paginator->sort('Título'); ?></th>
			<th><?php echo $this->Paginator->sort('Breve Descrição'); ?></th>
			<th><?php echo $this->Paginator->sort('Noticia na Íntegra'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($notices as $notice): ?>
	<tr>
		<td><?php echo h($notice['Notice']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($notice['Notice']['breveDescricao']); ?>&nbsp;</td>
		<td><?php echo h($notice['Notice']['noticiaNaIntegra']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $notice['Notice']['id_noticia'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $notice['Notice']['id_noticia'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $notice['Notice']['id_noticia']), null, __('Tem certeza de que deseja excluir notícia %s?', $notice['Notice']['titulo'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

