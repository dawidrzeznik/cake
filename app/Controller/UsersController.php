<?php
class UsersController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index() {
        $this->set('users', $this->User->find('all'));

    }

    public function add()
    {        if ($this->request->is('post'))
            {
                $this->User->create();
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash('Dodano użytkownika');
                    $this->redirect(array('action' => 'index'));            }
             else {
                    $this->Session->setFlash('Nie udało się dodać wpisu.');            }
            }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Błedne id'));
        }
        $post = $this->User->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Błędne id'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->User->id = $id;

            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Zaktualizowano wpis');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Aktualizacja się nie powiodła');
            }
        }
        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }
    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->User->delete($id)) {
            $this->Session->setFlash('Wpis o id: '.$id.' został usunięty');
            $this->redirect(array('action' => 'index'));
        }
    }

        }
?>