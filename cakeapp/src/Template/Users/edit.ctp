<h1>Edit User</h1>
<div class="container" style="width:550px">
    <?= $this->Form->create($user) ?>
    <?= $this->Form->control('first_name', ['class' => 'form-control']) ?>
    <?= $this->Form->control('last_name', ['class' => 'form-control']) ?>
    <?= $this->Form->control('email', ['class' => 'form-control']) ?>
    <?= $this->Form->control('password', ['class' => 'form-control']) ?>
    <?= $this->Form->control('birth_date', ['class' => 'form-control']) ?><br>
    <?= $this->Form->button(__('Save Article'), ['class' => 'btn btn-primary'] ) ?>
    <?= $this->Form->end() ?>
</div>