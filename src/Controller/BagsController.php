<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bags Controller
 *
 * @property \App\Model\Table\BagsTable $Bags
 *
 * @method \App\Model\Entity\Bag[] paginate($object = null, array $settings = [])
 */
class BagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $bags = $this->paginate($this->Bags);

        $this->set(compact('bags'));
        $this->set('_serialize', ['bags']);
    }

    /**
     * View method
     *
     * @param string|null $id Bag id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bag = $this->Bags->get($id, [
            'contain' => []
        ]);

        $this->set('bag', $bag);
        $this->set('_serialize', ['bag']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bag = $this->Bags->newEntity();
        if ($this->request->is('post')) {
            $bag = $this->Bags->patchEntity($bag, $this->request->getData());
            if ($this->Bags->save($bag)) {
                $this->Flash->success(__('The bag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bag could not be saved. Please, try again.'));
        }
        $this->set(compact('bag'));
        $this->set('_serialize', ['bag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bag = $this->Bags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bag = $this->Bags->patchEntity($bag, $this->request->getData());
            if ($this->Bags->save($bag)) {
                $this->Flash->success(__('The bag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bag could not be saved. Please, try again.'));
        }
        $this->set(compact('bag'));
        $this->set('_serialize', ['bag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bag = $this->Bags->get($id);
        if ($this->Bags->delete($bag)) {
            $this->Flash->success(__('The bag has been deleted.'));
        } else {
            $this->Flash->error(__('The bag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
