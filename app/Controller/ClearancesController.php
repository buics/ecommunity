<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ClearancesController extends AppController {
    var $layout = 'clearances_template';
    
    function index() {        
		$this->set('clearances',$this->Clearance->find('all'));                  
    }        
    
    function create() {
        $this->loadModel('Clearance');		
		
        if (!empty ($this->data)) {
            if ($this->Clearance->save($this->data)) {
                $this->Session->setFlash('Request has been created!');
                $this->redirect(array('action'=>'index'));
            }
        }
    }
    
    function delete($Id) {
        if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Clearance->delete($Id)) {
			$this->Session->setFlash('The request with id: ' . $Id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
    }
    
    function view($id = null) {
		$this->loadModel('Clearance');
        $this->set('clearance',$this->Clearance->find($id));
    }
	
	function cancel() {
        
    }
}
?>
