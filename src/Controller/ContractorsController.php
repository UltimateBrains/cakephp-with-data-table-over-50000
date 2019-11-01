<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Contractors Controller
 *
 * @property \App\Model\Table\ContractorsTable $Contractors
 *
 * @method \App\Model\Entity\Contractor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContractorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States', 'Countries', 'Users', 'CustomerRepresentative']
        ];
        $contractors = $this->paginate($this->Contractors);

        $this->set(compact('contractors'));
    }

    /**
     * View method
     *
     * @param string|null $id Contractor id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contractor = $this->Contractors->get($id, [
            'contain' => ['States', 'Countries', 'Users', 'CustomerRepresentative', 'BillingDetails', 'ClientRequests', 'ContractorAnswers', 'ContractorContacts', 'ContractorDocs', 'ContractorInvoices', 'ContractorServices', 'ContractorSites', 'ContractorTempsites', 'ContractorUsers', 'Documents', 'Employees', 'Explanations', 'Icons', 'Leads', 'Notes', 'NotesOld', 'OverallIcons', 'Payments', 'Reviews', 'SuggestedIcons', 'SuggestedOverallIcons']
        ]);

        $this->set('contractor', $contractor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contractor = $this->Contractors->newEntity();
        if ($this->request->is('post')) {
            $contractor = $this->Contractors->patchEntity($contractor, $this->request->getData());
            if ($this->Contractors->save($contractor)) {
                $this->Flash->success(__('The contractor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
        }
        $states = $this->Contractors->States->find('list', ['limit' => 200]);
        $countries = $this->Contractors->Countries->find('list', ['limit' => 200]);
        $users = $this->Contractors->Users->find('list', ['limit' => 200]);
        $customerRepresentative = $this->Contractors->CustomerRepresentative->find('list', ['limit' => 200]);
        $this->set(compact('contractor', 'states', 'countries', 'users', 'customerRepresentative'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contractor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contractor = $this->Contractors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contractor = $this->Contractors->patchEntity($contractor, $this->request->getData());
            if ($this->Contractors->save($contractor)) {
                $this->Flash->success(__('The contractor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor could not be saved. Please, try again.'));
        }
        $states = $this->Contractors->States->find('list', ['limit' => 200]);
        $countries = $this->Contractors->Countries->find('list', ['limit' => 200]);
        $users = $this->Contractors->Users->find('list', ['limit' => 200]);
        $customerRepresentative = $this->Contractors->CustomerRepresentative->find('list', ['limit' => 200]);
        $this->set(compact('contractor', 'states', 'countries', 'users', 'customerRepresentative'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contractor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contractor = $this->Contractors->get($id);
        if ($this->Contractors->delete($contractor)) {
            $this->Flash->success(__('The contractor has been deleted.'));
        } else {
            $this->Flash->error(__('The contractor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function  updatephone(){
        $leads = $this->Contractors->find()->select(['id','pri_contact_pn'])->toArray();
    
      foreach($leads as $value){
//pr($value);
        	$new =array();
            $new['pri_contact_pn'] = preg_replace("/^1?(?:[- .])?(\d{3})(?:[- .])?(\d{3})(?:[- .])?(\d{4})$/", "($1) $2-$3", $value->pri_contact_pn);
            $new['id'] = $value->id;
//pr($new);
            if($value['id'] == $new['id']){
                $contractors = TableRegistry::get('Contractors');

                  $query = $contractors->query();
                  $query->update()->set(['pri_contact_pn' => $new['pri_contact_pn']])->where(['id' => $new['id']])->execute();
                      
             
			}
            
      }
        $this->Flash->success("Operation successful.");


     }
}
