<div class="form-group">
<?= $this->Flash->render() ?>
<?= $this->Form->create('Users',['class' => 'form-signin']) ?>
        <h2 class='form-signin-heading'><?= __('Please sign in') ?></h2>
        <?= $this->Form->control('email', [
             'type' => 'email',
             'class' => 'form-control'
        ]) ?>
        <?= $this->Form->control('password', [
            'type' => 'password',
            'class' => 'form-control'
        ]) ?>
<?= $this->Html->link('Not registered?', ['controller' => 'Users', 'action' => 'add']) ?>
</br></br>
<?= $this->Form->button(__('Login'), ['class' => 'btn btn-lg btn-primary btn-block']); ?>
<?= $this->Form->end() ?>
</div>
