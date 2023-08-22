<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Contactos Controller
 *
 * @property \App\Model\Table\ContactosTable $Contactos
 * @method \App\Model\Entity\Contacto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $contactos = $this->paginate($this->Contactos);

        $this->set(compact('contactos'));
    }

    /**
     * View method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contacto = $this->Contactos->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('contacto'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contacto = $this->Contactos->newEmptyEntity();
        if ($this->request->is('post')) {
            $contacto = $this->Contactos->patchEntity($contacto, $this->request->getData());
            if ($this->Contactos->save($contacto)) {
                $this->Flash->success(__('Se ha añadido el contacto.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido añadir el contacto, inténtelo de nuevo.'));
        }
        $this->set(compact('contacto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contacto = $this->Contactos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contacto = $this->Contactos->patchEntity($contacto, $this->request->getData());
            if ($this->Contactos->save($contacto)) {
                $this->Flash->success(__('Se ha editado el contacto.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('No se ha podido editar el contacto, inténtelo de nuevo.'));
        }
        $this->set(compact('contacto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contacto = $this->Contactos->get($id);
        if ($this->Contactos->delete($contacto)) {
            $this->Flash->success(__('The contacto has been deleted.'));
        } else {
            $this->Flash->error(__('No se ha podido eliminar el contacto, inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
