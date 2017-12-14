<?php

namespace App\Controller;

class ArticlesController extends AppController
{
    public function index()
    {
        $articles = $this->paginate($this->Articles);
        $this->set(compact('articles'));
        $this->set('_serialize', ['articles']);
    }

    public function view($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);

        $this->set('article', $article);
        $this->set('_serialize', ['article']);
    }

    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            $article->user_id = $this->Auth->user('id');
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $this->set(compact('article'));
        $this->set('_serialize', ['article']);
    }

    public function edit($id = null)
    {
        $article = $this->Articles->get($id, [
            'contain' => []
        ]);

        if ($article->user_id !== $this->Auth->user('id')) {
            $this->Flash->error(__('You are not able to edit this article'));
            return $this->redirect(['action' => 'index']);
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());

            if ($this->Articles->save($article)) {
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $this->set(compact('article'));
        $this->set('_serialize', ['article']);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $article = $this->Articles->get($id);
        if ($article->user_id === $this->Auth->user('id')) {
            if ($this->Articles->delete($article)) {
                $this->Flash->success(__('The article has been deleted.'));
            } else {
                $this->Flash->error(__('The article could not be deleted. Please, try again.'));
            }
        } else {
            $this->Flash->error(__('You are not able to delete this article'));
            return $this->redirect(['action' => 'index']);
        }

        return $this->redirect(['action' => 'index']);
    }
}
