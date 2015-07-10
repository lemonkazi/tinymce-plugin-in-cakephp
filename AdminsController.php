<?php

/**
 * 
 */
class AdminsController extends AppController {

    var $layout = 'admin';

    function login() {
        $this->layout = "admin-login";
    }

    function deshboard() {
        
    }

    function create() {
        $this->loadModel('User');
        $this->loadModel('Rule');

        /* IP address insert */
        $exec = exec("hostname"); //the "hostname" is a valid command in both windows and linux
        $hostname = trim($exec); //remove any spaces before and after
        $ip = gethostbyname($hostname); //resolves the hostname using local hosts resolver or DNS

        if ($this->request->is('post')) {
            $this->request->data['User']['password'] = md5($this->request->data['User']['password']);
            $this->request->data['User']['ip'] = $ip;
            $this->User->save($this->request->data['User']);
            $msg = '<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong> User Created succeesfully </strong>
			</div>';
            $this->Session->setFlash($msg);
            return $this->redirect('create');
        }
        $this->set('rules', $this->Rule->find("list"));
    }

    function manage() {
        $this->loadModel('User');
        $users = $this->User->find('all');
        $this->set(compact('users'));
    }
    function junioredit(){
        //var $layout = 'news';
        $this->layout="news";
        $this->loadModel('Newses');
        $this->loadModel('Category');
        //$this->TinyMCE->editor('advanced');
        //$this->Tinymce->input($Model.fieldName, $options = array(), $tinyoptions = array(), $preset = null)
//        $this->request->clientIp();
        
        if($this->request->is('post')){
            $this->Newses->save($this->request->data['Newses']);
             $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong> News Insert succeesfully </strong>
            </div>';
            $this->Session->setFlash($msg);
            return $this->redirect('junioredit'); 
        }
        
        $this->set('categories',$this->Category->find("list"));
    }  

  

    function newses() {
        $this->layout="news";
        $this->loadModel('Newses');
        $newses = $this->Newses->find('all');
        $this->set(compact('newses'));
    }

}

?>