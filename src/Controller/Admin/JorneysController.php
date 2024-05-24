<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Jorneys Controller
 *
 * @property \App\Model\Table\JorneysTable $Jorneys
 * @method \App\Model\Entity\Jorney[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JorneysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $jorneys = $this->paginate($this->Jorneys);

        $this->set(compact('jorneys'));
    }

    /**
     * View method
     *
     * @param string|null $id Jorney id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jorney = $this->Jorneys->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('jorney'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jorney = $this->Jorneys->newEmptyEntity();
        if ($this->request->is('post')) {
            $jorney = $this->Jorneys->patchEntity($jorney, $this->request->getData());
            if ($this->Jorneys->save($jorney)) {
                $this->Flash->success(__('The jorney has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jorney could not be saved. Please, try again.'));
        }
        $this->set(compact('jorney'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jorney id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jorney = $this->Jorneys->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jorney = $this->Jorneys->patchEntity($jorney, $this->request->getData());
            if ($this->Jorneys->save($jorney)) {
                $this->Flash->success(__('The jorney has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jorney could not be saved. Please, try again.'));
        }
        $this->set(compact('jorney'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jorney id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jorney = $this->Jorneys->get($id);
        if ($this->Jorneys->delete($jorney)) {
            $this->Flash->success(__('The jorney has been deleted.'));
        } else {
            $this->Flash->error(__('The jorney could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
