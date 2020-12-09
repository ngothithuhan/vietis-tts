<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AdminController;

/**
 * ListPermissions Controller
 *
 * @property \App\Model\Table\ListPermissionsTable $ListPermissions
 *
 * @method \App\Model\Entity\ListPermission[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListPermissionsController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
      public function index()
    {
        $this->loadModel('Groups');
        $groups = $this->Groups->find('list', ['limit' => 200]);
        $listPermissions = $this->paginate($this->ListPermissions);
        $listPermission = $this->ListPermissions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is('post')) {
            $this->add();
        }
        if($this->request->is('post', 'put', 'patch')){
          $this->edit();
          }
        $this->set(compact('listPermissions','listPermission',
            'groups'));  
        
    }

    /**
     * View method
     *
     * @param string|null $id List Permission id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listPermission = $this->ListPermissions->get($id, [
            'contain' => []
        ]);

        $this->set('listPermission', $listPermission);

        $this->set(compact('listPermissions'));

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listPermission = $this->ListPermissions->newEntity();
        if ($this->request->is('post')) {
            $listPermission = $this->ListPermissions->patchEntity($listPermission, $this->request->getData());
            if ($this->ListPermissions->save($listPermission)) {
                $this->Flash->success(__('The list permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The list permission could not be saved. Please, try again.'));
        }
        
    }

    /**
     * Edit method
     *
     * @param string|null $id List Permission id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listPermission = $this->ListPermissions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listPermission = $this->ListPermissions->patchEntity($listPermission, $this->request->getData());
            if ($this->ListPermissions->save($listPermission)) {
                $this->Flash->success(__('The list permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The list permission could not be saved. Please, try again.'));
        }
        $this->set(compact('listPermission'));
    }

    /**
     * Delete method
     *
     * @param string|null $id List Permission id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listPermission = $this->ListPermissions->get($id);
        if ($this->ListPermissions->delete($listPermission)) {
            $this->Flash->success(__('The list permission has been deleted.'));
        } else {
            $this->Flash->error(__('The list permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
