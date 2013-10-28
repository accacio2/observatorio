<!-- Stats -->
<div class="panel panel-default stats">
	<div class="panel-body">
		<div class="col-md-4 stat">
			<div class="data">
				<?php if (count($best_team) > 0): ?>
					<?php if (count($best_team) > 1): ?>
						<span class="number"><?php echo $best_team[0]['Team']['points']; ?></span>
						<?php foreach ($best_team as $team): ?>
						| <?php echo $team['Team']['acronym']; ?>
						<?php endforeach; ?>
					<?php else: ?>
						<span class="number"><?php echo $best_team[0]['Team']['points']; ?></span>
						<?php foreach ($best_team as $team): ?>
						<?php echo $team['Team']['acronym']; ?>
						<?php endforeach; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<?php if (count($best_team) > 1): ?>
			<span class="min">as equipes estão empatadas</span>
			<?php else: ?>
			<span class="min">equipe com mais tectech´s</span>
			<?php endif; ?>
		</div>
		<div class="col-md-4 stat">
			<div class="data">
				<span class="number"><?php echo $total_tasks; ?></span>
				provas
			</div>
			<span class="min">cadastradas</span>
		</div>
		<div class="col-md-4 stat last">
			<div class="data">
				<span class="number"><?php echo $total_teams; ?></span>
				equipes
			</div>
			<span class="min">cadastradas</span>
		</div>
	</div>
</div>

<!-- Atalhos -->
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default shortcuts">
			<div class="panel-heading">Acesso Rápido</div>
			<div class="panel-body">
			<?php
			echo
				$this->Html->link(
					'<i class="glyphicon glyphicon-thumbs-up"></i><span class="shortcut-label">Adicionar Tectech´s</span>',
					array(
						'controller' 			=> 'points',
						'action' 				=> 'add',
						'painel' 				=> true
					),
					array(
						'title' 				=> 'Adicionar Tectech´s',
						'class'					=> 'shortcut',
						'escape' 				=> false
					)
				);
			?>

			<?php
			echo
				$this->Html->link(
					'<i class="glyphicon glyphicon-tower"></i><span class="shortcut-label">Adicionar Equipe</span>',
					array(
						'controller' 			=> 'teams',
						'action' 				=> 'add',
						'painel' 				=> true
					),
					array(
						'title' 				=> 'Adicionar Equipe',
						'class'					=> 'shortcut',
						'escape' 				=> false
					)
				);
			?>
			<?php
			echo
				$this->Html->link(
					'<i class="glyphicon glyphicon-tasks"></i><span class="shortcut-label">Adicionar Prova</span>',
					array(
						'controller' 			=> 'tasks',
						'action' 				=> 'add',
						'painel' 				=> true
					),
					array(
						'title' 				=> 'Adicionar Prova',
						'class'					=> 'shortcut',
						'escape' 				=> false
					)
				);
			?>
			<?php
			echo
				$this->Html->link(
					'<i class="glyphicon glyphicon-user"></i><span class="shortcut-label">Adicionar Usuário</span>',
					array(
						'controller' 			=> 'users',
						'action' 				=> 'add',
						'painel' 				=> true
					),
					array(
						'title' 				=> 'Adicionar Usuário',
						'class'					=> 'shortcut',
						'escape' 				=> false
					)
				);
			?>

			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default shortcuts">
			<div class="panel-heading">Ranking Geral</div>
			<div class="panel-body">
				<div id="graph"></div>
			</div>
		</div>
	</div>
</div>
