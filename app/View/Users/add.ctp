<h1>Dodaj użytkownika</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('name');
echo $this->Form->input('surname');
echo $this->Form->input('address');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end('Zapisz');
echo $this->Html->link('Powrót', array('action' => 'index'));
?>