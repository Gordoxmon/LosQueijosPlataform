<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Leaderboards Controller
 *
 * @property \App\Model\Table\LeaderboardsTable $Leaderboards
 * @method \App\Model\Entity\Leaderboard[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LeaderboardsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $leaderboards = $this->paginate($this->Leaderboards);

        $this->set(compact('leaderboards'));
    }

    /**
     * View method
     *
     * @param string|null $id Leaderboard id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $leaderboard = $this->Leaderboards->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('leaderboard'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $leaderboard = $this->Leaderboards->newEmptyEntity();
        if ($this->request->is('post')) {
            $leaderboard = $this->Leaderboards->patchEntity($leaderboard, $this->request->getData());
            if ($this->Leaderboards->save($leaderboard)) {
                $this->Flash->success(__('The leaderboard has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leaderboard could not be saved. Please, try again.'));
        }
        $this->set(compact('leaderboard'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Leaderboard id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $leaderboard = $this->Leaderboards->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leaderboard = $this->Leaderboards->patchEntity($leaderboard, $this->request->getData());
            if ($this->Leaderboards->save($leaderboard)) {
                $this->Flash->success(__('The leaderboard has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The leaderboard could not be saved. Please, try again.'));
        }
        $this->set(compact('leaderboard'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Leaderboard id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $leaderboard = $this->Leaderboards->get($id);
        if ($this->Leaderboards->delete($leaderboard)) {
            $this->Flash->success(__('The leaderboard has been deleted.'));
        } else {
            $this->Flash->error(__('The leaderboard could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
