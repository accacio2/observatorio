<div class="libraries index">
	<h2><?php echo __('Bibliotecas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	
		<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Cadastrar Biblioteca'), array('action' => 'add')); ?></li>
	</ul>
	</div>
	
	<tr>
			<th><?php echo $this->Paginator->sort('odm'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('imagem'); ?></th>
			<th><?php echo $this->Paginator->sort('arquivo'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($libraries as $library): ?>
	<tr>
		<td><?php echo h($library['Library']['odm']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['categoria']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['imagem']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['arquivo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $library['Library']['id_itemBiblioteca'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $library['Library']['id_itemBiblioteca'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $library['Library']['id_itemBiblioteca']), null, __('Tem certeza de que deseja excluir o(a) %s?', $library['Library']['titulo'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterios'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
