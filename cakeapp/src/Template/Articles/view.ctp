<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format('Y-m-d H:i:s') ?></small></p>
<?= $this->Html->link('Go article\'s list', ['controller' => 'Articles', 'action' => 'index']) ?>
