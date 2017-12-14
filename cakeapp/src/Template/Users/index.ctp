<h1>Users</h1>
<div class="table table-sm">
<table class="table table-striped">
    <tr>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Date of birth</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td>
            <?= $user->first_name ?>
        </td>
         <td>
            <?= $user->last_name ?>
        </td>
        <td>
            <?= $user->email ?>
        </td>
        <td>
            <?= $user->password ?>
        </td>
        <td>
             <?= $user->birth_date->format('Y-m-d') ?>
        </td>

        <td>
             <?= $this->Form->postLink(
                             'Delete',
                             ['action' => 'delete', $user->id])
              ?>
             <?= $this->Html->link('Edit', ['action' => 'edit', $user->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
<?= $this->Html->link('Go article\'s list', ['controller' => 'Articles', 'action' => 'index']) ?>
