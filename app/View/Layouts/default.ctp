<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout; ?> | <?php echo Configure::read('Application.name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Styles -->
	
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		
			OBSERVATÓRIO
			
		</div>
		<div id="content">
		
			<ul>

			<div class="actions">
			<li>
			Painel <br /><br />
				<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-tower"></i><span>Biblioteca</span>',
							array(
								'controller' 			=> 'libraries',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Biblioteca',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<br />
				<li>
				
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-tower"></i><span>Parceiros</span>',
							array(
								'controller' 			=> 'partners',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Parceiros',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<br />
				<li>
				
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-tower"></i><span>Notícias</span>',
							array(
								'controller' 			=> 'notices',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Equipes',
								'escape' 				=> false
							)
						);
					?>

				</li>
				<br />
				<li>
					<?php
					echo
						$this->Html->link(
							'<i class="glyphicon glyphicon-user"></i><span>Usuários</span>',
							array(
								'plugin'				=> false,
								'controller' 			=> 'users',
								'action' 				=> 'index',
								'admin' 				=> true
							),
							array(
								'title' 				=> 'Usuários',
								'escape' 				=> false
							)
						);
					?>

				</li>
				</div>
			</ul>
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		
		<div id="footerleft">
    </div>
    <div id="footermiddle">
		<a href="indexobs.html">Início</a> : 
		<a href="quemsomos.html">Quem Somos</a> :
		<a href="parceiros.html">Parceiros</a> 
		<a href="biblioteca.html"><br />
		Biblioteca</a> : 
		<a href="noticias.html">Notícias</a> :
        <a href="sobre.html">Sobre ODM</a> :
        <a href="contato.html">Contatos</a> 
     </div>
    <div id="footerright">
     <div id="un"><?php echo $this->Html->image('img/pnud.png', array('alt' => 'PNUD', 'width' => '40', 'height' => '70')); ?></div>
     <p align="left">Fábrica de Software ® 2013 </p>
	 <p align="left">Todos os Direitos Reservados</p>	
    </div>                   
  </div>
		
		</div>
	</div>
	
</body>
</html>
