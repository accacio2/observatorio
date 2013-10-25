<!-- Navbar -->
    <header class="navbar navbar-fixed-top navbar-inverse" role="navigation">
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
                        'action'                => 'index',
                        'painel'                => true
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
                <li>
                    <?php
                    echo
                        $this->Html->link(
                            'Olá, ' . $usuario['name'],
                            array(
                                'controller'            => 'users',
                                'action'                => 'profile',
                                'painel'                => true
                            ),
                            array(
                                'title'                 => 'Olá, ' . $usuario['name'],
                                'escape'                => false
                            )
                        );
                    ?>

                </li>
                <li>
                    <?php
                    echo
                        $this->Html->link(
                            'Ir para o site',
                            array(
                                'controller'            => 'home',
                                'action'                => 'index',
                                'painel'                => false
                            ),
                            array(
                                'title'                 => 'Ir para o site',
                                'target'                => '_blank'
                            )
                        );
                    ?>

                </li>
                <li>
                    <?php
                    echo
                        $this->Html->link(
                            '<span class="glyphicon glyphicon-off"></span>',
                            array(
                                'controller'            => 'users',
                                'action'                => 'logout',
                                'painel'                => true
                            ),
                            array(
                                'title'                 => 'Sair',
                                'escape'                => false
                            )
                        );
                    ?>

                </li>
            </ul>
        </div>
    </header>
