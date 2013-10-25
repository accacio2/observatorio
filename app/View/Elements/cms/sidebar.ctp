	<aside class="sidebar col-md-2">
		<nav id="sidebar-menu" role="complementary">
			<ul>
				<li<?php echo $this->Active->add('home'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-home"></i><span>Home</span>',
							array(
								'controller' 			=> 'home',
								'action' 				=> 'index',
								'painel' 				=> true
							),
							array(
								'title' 				=> 'Home',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<li<?php echo $this->Active->add('teams'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-tower"></i><span>Equipes</span>',
							array(
								'controller' 			=> 'teams',
								'action' 				=> 'index',
								'painel' 				=> true
							),
							array(
								'title' 				=> 'Equipes',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<li<?php echo $this->Active->add('points'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-thumbs-up"></i><span>Tectech´s</span>',
							array(
								'controller' 			=> 'points',
								'action' 				=> 'index',
								'painel' 				=> true
							),
							array(
								'title' 				=> 'Tectech´s',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<li<?php echo $this->Active->add('tasks'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-tasks"></i><span>Provas</span>',
							array(
								'controller' 			=> 'tasks',
								'action' 				=> 'index',
								'painel' 				=> true
							),
							array(
								'title' 				=> 'Provas',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<li<?php echo $this->Active->add('users'); ?>>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-user"></i><span>Usuários</span>',
							array(
								'plugin'				=> false,
								'controller' 			=> 'users',
								'action' 				=> 'index',
								'painel' 				=> true
							),
							array(
								'title' 				=> 'Usuários',
								'escape' 				=> false
							)
						);
					?>

				</li>
			</ul>
		</nav>
	</aside>
