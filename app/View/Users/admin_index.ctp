<div class="users index">
	<h2><?php echo __('Usuários'); ?></h2>
	
	<table cellpadding="0" cellspacing="0">
	
	<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Cadastrar Usuario'), array('action' => 'add')); ?></li>
	</ul>
	</div>
	
	<tr>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('login'); ?></th>
			<th><?php echo $this->Paginator->sort('Lembrete Senha'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Ações'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['login']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['lembreteSenha']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id_usuario'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id_usuario'])); ?>
			<?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $user['User']['id_usuario']), null, __('Tem certeza que deseja excuir o usuário %s ?', $user['User']['login'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Proximo') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

