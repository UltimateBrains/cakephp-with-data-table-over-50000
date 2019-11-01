<?php
namespace App\Controller;


use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

/**
 * Leads Controller
 *
 * @property \App\Model\Table\LeadsTable $Leads
 *
 * @method \App\Model\Entity\Lead[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LeadsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        ini_set('memory_limit','-1');	
            
        $data = $this->Leads->find("all",['limit' =>10])->toArray();
  
        

        // foreach ($data as $key => $value) {
        // 	echo $value;
        // }
        // return  $this->response
        //     ->withType('application/json')
        //     ->withStringBody(json_encode([
        //       'data' => $leads,
              
        //     ])); 
           $this->set(compact('lead'));

    }

    /**
     * View method
     *
     * @param string|null $id Lead id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lead = $this->Leads->get($id, [
            'contain' => ['Clients', 'Contractors', 'LeadStatus']
        ]);

        $this->set('lead', $lead);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lead = $this->Leads->newEntity();
        if ($this->request->is('post')) {
            $lead = $this->Leads->patchEntity($lead, $this->request->getData());
            if ($this->Leads->save($lead)) {
                $this->Flash->success(__('The lead has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lead could not be saved. Please, try again.'));
        }
        $clients = $this->Leads->Clients->find('list', ['limit' => 200]);
        $contractors = $this->Leads->Contractors->find('list', ['limit' => 200]);
        $leadStatus = $this->Leads->LeadStatus->find('list', ['limit' => 200]);
        $this->set(compact('lead', 'clients', 'contractors', 'leadStatus'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lead id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lead = $this->Leads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lead = $this->Leads->patchEntity($lead, $this->request->getData());
            if ($this->Leads->save($lead)) {
                $this->Flash->success(__('The lead has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lead could not be saved. Please, try again.'));
        }
        $clients = $this->Leads->Clients->find('list', ['limit' => 200]);
        $contractors = $this->Leads->Contractors->find('list', ['limit' => 200]);
        $leadStatus = $this->Leads->LeadStatus->find('list', ['limit' => 200]);
        $this->set(compact('lead', 'clients', 'contractors', 'leadStatus'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lead id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lead = $this->Leads->get($id);
        if ($this->Leads->delete($lead)) {
            $this->Flash->success(__('The lead has been deleted.'));
        } else {
            $this->Flash->error(__('The lead could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function getLeads(){

        $this->autoRender= false;
        
        // ini_set('memory_limit','-1');
        $request=$_REQUEST;

        $draw = $request['draw'];
        $page = intval($request['start']);

        $offset = intval($request['length']);

        // $sLimit = "";
               if ( ( $page  > 0 ) && ( $offset) ) {
         
        // if ( isset( $request['start'] ) && $request['length'] != '-1' ) {

            // $sLimit = " LIMIT ".intval( $request['start'] ).", ".intval( $request['length'] );
            $sql = $this->Leads->find()->limit($offset)->page($page)->toArray();

        }

        else {

            // $sLimit = " LIMIT 0, 10";
            $sql = $this->Leads->find()->limit($offset)->toArray();

        }  
                

        //$sql = $this->Leads->find()->limit(10)->toArray();
        $col =array(
            0   =>  'id',
            1   =>  'company_name',
            2   =>  'contact_name_first',
            3   =>  'contact_name_last',
            4   =>  'phone_no',
            // 5   =>  'email',
            6   =>  'city',
            7   =>  'state',
            8   =>  'zip_code',
            // 9   =>  'description_of_work'

        );  //create column like table in database
        //$sql ="SELECT * FROM tbperson";
        // $sql = $this->Leads->find()->limit(20)->toArray();

        
         
         $count = $this->Leads->find()->count();
                                   
                 
         $totalData = $count;
         
        $totalFilter=$totalData;
        
       // $sql ="SELECT * FROM tbperson WHERE 1=1";
        // $sql = $this->Users->find("all")->where([1=>1])->toArray();
        // if(!empty($request['search']['value'])){
        //     $sql.=" AND (id Like '".$request['search']['value']."%' ";
        //     $sql.=" OR company_name Like '".$request['search']['value']."%' ";
        //     $sql.=" OR contact_name_first Like '".$request['search']['value']."%' ";
        //     $sql.=" OR contact_name_last Like '".$request['search']['value']."%' )";

        // }
        
        $totalData= $count;
        
        // $sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
            // $request['start']."  ,".$request['length']."  ";
        
        

                 $data=array();
                foreach ($sql as $key => $value) {
          
                    $subdata=array();
                    $subdata[]=$value->id; 
                    $subdata[]=$value->company_name; 
                    $subdata[]=$value->contact_name_first; 
                    $subdata[]=$value->contact_name_last; 
                    $subdata[]=$value->phone_no; 
                    // $subdata[]=$value->email; 
                    $subdata[]=$value->city; 
                    $subdata[]=$value->state;
                    $subdata[]=$value->zip_code;
                    $subdata[]=$value->description_of_work;        
                      //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
                     // $subdata[]='<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$value->id.'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>
                     //            <button type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</button>';
                    $data[]=$subdata;
                    }

                    $json_data=array(
                        "draw"              =>  $draw,
                        "recordsTotal"      =>  $totalData,
                        "recordsFiltered"   =>  $totalFilter,
                        "data"              =>  $data,
                        // "page"              =>  $page,
                        // "offset"            =>  $offset
                    );
                    echo json_encode($json_data);
        }
}
