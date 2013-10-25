<!-- Navbar -->
<header class="navbar navbar-fixed-top navbar-default" role="navigation">
	<div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			
            <?php
            echo
                $this->Html->link(
                'Integra <b>System</b>',
                    array(
                        'controller'            => 'home',
                        'action'				=> 'index'
                    ),
                    array(
                        'class'                 => 'navbar-brand',
                        'title'                 => 'IntegraSystem',
                        'escape'                => false
                    )
                );
            ?>

        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li<?php echo $this->Active->add('home'); ?>>
                    <?php
                    echo
                        $this->Html->link(
                            'Ranking',
                            array(
                            	'controller'            => 'home',
                                'action'                => 'index'
                            ),
                            array(
                                'title'                 => 'Ranking'
                            )
                        );
                    ?>

                </li>
                <li<?php echo $this->Active->add('tasks'); ?>>
                    <?php
                    echo
                        $this->Html->link(
                            'Provas',
                            array(
                                'controller'            => 'tasks',
                                'action'                => 'index'
                            ),
                            array(
                                'title'                 => 'Provas'
                            )
                        );
                    ?>

                </li>
            </ul>
        </div>
	</div>
</header>
