<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


/**
 * ContractorAnswers Controller
 *
 * @property \App\Model\Table\ContractorAnswersTable $ContractorAnswers
 *
 * @method \App\Model\Entity\ContractorAnswer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContractorAnswersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contractors', 'Questions', 'Clients']
        ];
        $contractorAnswers = $this->paginate($this->ContractorAnswers);

        $this->set(compact('contractorAnswers'));
    }

    /**
     * View method
     *
     * @param string|null $id Contractor Answer id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contractorAnswer = $this->ContractorAnswers->get($id, [
            'contain' => ['Contractors', 'Questions', 'Clients']
        ]);

        $this->set('contractorAnswer', $contractorAnswer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contractorAnswer = $this->ContractorAnswers->newEntity();
        if ($this->request->is('post')) {
            $contractorAnswer = $this->ContractorAnswers->patchEntity($contractorAnswer, $this->request->getData());
            if ($this->ContractorAnswers->save($contractorAnswer)) {
                $this->Flash->success(__('The contractor answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor answer could not be saved. Please, try again.'));
        }
        $contractors = $this->ContractorAnswers->Contractors->find('list', ['limit' => 200]);
        $questions = $this->ContractorAnswers->Questions->find('list', ['limit' => 200]);
        $clients = $this->ContractorAnswers->Clients->find('list', ['limit' => 200]);
        $this->set(compact('contractorAnswer', 'contractors', 'questions', 'clients'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contractor Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contractorAnswer = $this->ContractorAnswers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contractorAnswer = $this->ContractorAnswers->patchEntity($contractorAnswer, $this->request->getData());
            if ($this->ContractorAnswers->save($contractorAnswer)) {
                $this->Flash->success(__('The contractor answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contractor answer could not be saved. Please, try again.'));
        }
        $contractors = $this->ContractorAnswers->Contractors->find('list', ['limit' => 200]);
        $questions = $this->ContractorAnswers->Questions->find('list', ['limit' => 200]);
        $clients = $this->ContractorAnswers->Clients->find('list', ['limit' => 200]);
        $this->set(compact('contractorAnswer', 'contractors', 'questions', 'clients'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contractor Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contractorAnswer = $this->ContractorAnswers->get($id);
        if ($this->ContractorAnswers->delete($contractorAnswer)) {
            $this->Flash->success(__('The contractor answer has been deleted.'));
        } else {
            $this->Flash->error(__('The contractor answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function quesUpdate(){
            //$sql ='SELECT id,answer FROM public.contractor_answers where question_id=10';
            $sql = $this->ContractorAnswers->find()->select(['id','answer'])->where(['question_id'=>10])->toArray();
            foreach($sql as $value){
    //pr($value);
        		$new =array();
		 
            $new['answer'] = preg_replace("/^1?(?:[- .])?(\d{3})(?:[- .])?(\d{3})(?:[- .])?(\d{4})$/", "($1) $2-$3", $value->answer);
            $new['id'] = $value->id;
//pr($new);
            if($value['id'] == $new['id']){
                $contractorsAns = TableRegistry::get('ContractorAnswers');

                  $query = $contractorsAns->query();
                  $query->update()->set(['answer' => $new['answer']])->where(['id' => $new['id']])->execute();
                      
             
			}
    }
        $this->Flash->success(__("Operation Successful"));
}

}
