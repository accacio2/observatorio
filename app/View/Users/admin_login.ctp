<div class="users index">

<h2>Login</h2>
<?php
echo $this->Form->create('User',
array('url' => array(
'controller' => 'users',
'action' =>'login')));

echo $this->Form->input('login');
echo $this->Form->input('senha',array('type'=>'password'));
echo $this->Form->end('Login');
?>
</div>