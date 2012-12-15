<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ClearancesController extends AppController {
    var $layout = 'clearances_template';
    
    function index() {
        $clearances = $this->Clearance->find('all');
        
        //$this->set('clearances', $clearances);
        $this->set('var', 'The quick brow fox');
    }        
    
    function create() {
        
    }
    
    function delete() {
        
    }
    
    function edit() {
        
    }
}
?>
