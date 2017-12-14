<div class="users form">
<?= $this->Form->create($user, ['class' => 'form-signin']) ?>
    <fieldset>
        <legend><?= __('Register') ?></legend>
        <?= $this->Form->control('first_name', [
            'class' => 'form-control'
        ]) ?>
        <?= $this->Form->control('last_name', [
            'class' => 'form-control'
        ]) ?>
        <?= $this->Form->control('password', [
             'class' => 'form-control'
        ]) ?>
        <?= $this->Form->control('confirm_password', [
        'type' => 'password',
        'class' => 'form-control'
        ]) ?>
        <?= $this->Form->control('email', [
            'class' => 'form-control'
         ]) ?>
        <?= $this->Form->control('birth_date', [
                'type'=> 'text',
               'id' => 'datepicker',
                'class' => 'form-control',
               'label' => 'Date of birth',
               ]) ?>
   </fieldset></br>
    <script>
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            uiLibrary: 'bootstrap4'
        });
    </script>
<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-lg btn-primary btn-block']); ?>
<?= $this->Form->end() ?>
</div>