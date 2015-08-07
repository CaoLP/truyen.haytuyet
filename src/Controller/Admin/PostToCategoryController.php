<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * PostToCategory Controller
 *
 * @property \App\Model\Table\PostToCategoryTable $PostToCategory
 */
class PostToCategoryController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Posts']
        ];
        $this->set('postToCategory', $this->paginate($this->PostToCategory));
        $this->set('_serialize', ['postToCategory']);
    }

    /**
     * View method
     *
     * @param string|null $id Post To Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postToCategory = $this->PostToCategory->get($id, [
            'contain' => ['Categories', 'Posts']
        ]);
        $this->set('postToCategory', $postToCategory);
        $this->set('_serialize', ['postToCategory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postToCategory = $this->PostToCategory->newEntity();
        if ($this->request->is('post')) {
            $postToCategory = $this->PostToCategory->patchEntity($postToCategory, $this->request->data);
            if ($this->PostToCategory->save($postToCategory)) {
                $this->Flash->success(__('The post to category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The post to category could not be saved. Please, try again.'));
            }
        }
        $categories = $this->PostToCategory->Categories->find('list', ['limit' => 200]);
        $posts = $this->PostToCategory->Posts->find('list', ['limit' => 200]);
        $this->set(compact('postToCategory', 'categories', 'posts'));
        $this->set('_serialize', ['postToCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Post To Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postToCategory = $this->PostToCategory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postToCategory = $this->PostToCategory->patchEntity($postToCategory, $this->request->data);
            if ($this->PostToCategory->save($postToCategory)) {
                $this->Flash->success(__('The post to category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The post to category could not be saved. Please, try again.'));
            }
        }
        $categories = $this->PostToCategory->Categories->find('list', ['limit' => 200]);
        $posts = $this->PostToCategory->Posts->find('list', ['limit' => 200]);
        $this->set(compact('postToCategory', 'categories', 'posts'));
        $this->set('_serialize', ['postToCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Post To Category id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postToCategory = $this->PostToCategory->get($id);
        if ($this->PostToCategory->delete($postToCategory)) {
            $this->Flash->success(__('The post to category has been deleted.'));
        } else {
            $this->Flash->error(__('The post to category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
