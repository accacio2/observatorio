<div class="partners index">
	<h2><?php echo __('Parceiros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	
	<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Novo Parceiro'), array('action' => 'add')); ?></li>
	</ul>
	</div>	
	
	<tr>
			<th><?php echo $this->Paginator->sort('id_parceiro'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('link'); ?></th>
			<th><?php echo $this->Paginator->sort('imagem'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($partners as $partner): ?>
	<tr>
		<td><?php echo h($partner['Partner']['id_parceiro']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['nome']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['email']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['link']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['imagem']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $partner['Partner']['id_parceiro'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $partner['Partner']['id_parceiro'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $partner['Partner']['id_parceiro']), null, __('Tem certeza que deseja deletar # %s?', $partner['Partner']['nome'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Próximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

