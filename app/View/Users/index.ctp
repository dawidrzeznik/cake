<h1>Użytkownicy</h1>
<p>
    <?php echo $this->Html->link('Nowy użytkownik', array('action' => 'add')); ?>
    <a target="_blank" href="http://www.github.com/dawidziu">GitHub</a>

</p>
<table>
    <tr>
        <th>Id</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Adres</th>
        <th>Nazwa użytkownika</th>
        <th>Hasło</th>
        <th>Edycja</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['User']['id']; ?></td>
            <td><?php echo $user['User']['name']; ?></td>
            <td><?php echo $user['User']['surname']; ?></td>
            <td><?php echo $user['User']['address']; ?></td>
            <td><?php echo $user['User']['username']; ?></td>
            <td><?php echo $user['User']['password']; ?></td>
            <td>
                <?php echo $this->Form->postLink('Usuń',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => 'Jestes pewnien?'));
                ?>
                <?php echo $this->Html->link('Edytuj',
                    array('action' => 'edit', $user['User']['id'])); ?>
            </td>

        </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>
