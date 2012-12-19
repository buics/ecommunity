<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class RegistrationsController extends AppController {
    
    function home() {
        
    }
    
    /**
     * register new member
     */
    function add() {
        $this->loadModel('Registration');
        
        if (!empty ($this->data)) {
            if ($this->Registration->save($this->data)) {
                $this->Session->setFlash('Registration completed.');
                $this->redirect(array('action'=>'home'));
            }
        }
        
    }
    
    function view($id = null) {
        $this->loadModel('Registration');
        
        $this->set('registration',$this->Registration->find($id));
        
    }
    
}
?>