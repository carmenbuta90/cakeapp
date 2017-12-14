<h1>Articles</h1>
<div class="table-responsive">
<table class="table table-striped">
    <tr>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
        </td>
        <td>
            <?= $article->created->format('Y-m-d H:i:s') ?>
        </td>
         <td>
             <?= $this->Form->postLink(
                             'Delete',
                             ['action' => 'delete', $article->id])
              ?>
             <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
         </td>
    </tr>
    <?php endforeach; ?>
</table>
    <?= $this->Html->link('Go to users list', ['controller' => 'Users', 'action' => 'index']) ?>
</div>