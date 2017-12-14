<h1>Add Article</h1>
<div class="container" style="width:550px">
    <?= $this->Form->create($article) ?>
    <?= $this->Form->control('title', ['class' => 'form-control']) ?>
    <?= $this->Form->control('body', ['class' => 'form-control']) ?><br>
    <?= $this->Form->button(__('Save Article'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
