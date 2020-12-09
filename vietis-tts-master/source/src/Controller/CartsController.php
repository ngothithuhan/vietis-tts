<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;


/**
 * Carts Controller
 *
 *
 * @method \App\Model\Entity\Cart[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CartsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */   

    public function index()
    {
        $this->Products = TableRegistry::getTableLocator()->get('Products');

        $carts = $this->Carts->readProduct();
        $products = array();
        if (null!=$carts) {
            foreach ($carts as $productId => $count) {
                $product = $this->Products->get($productId);
                $product['count'] = $count;
                $products[]=$product;
            }
        }
        // dd($products);
        $this->set(compact('products'));
    }

    /**
     * View method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    
    public function add() {
        $this->autoRender = false;  
        if ($this->request->is('post')) {
            if($this->request->data['quantity']){
                $quantity=(int)$this->request->data['quantity'];
            }
            $productId=$this->request->data['product_id'];
            $this->Carts->addProduct($productId,$quantity);
            
        }
        echo $this->Carts->getCount();
        $this->redirect(['controller'=>'Products', 'action' => 'index']);

    }
    

    /**
     * Edit method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function update() {
        if ($this->request->is('post')) {
            if (!empty($this->request->data)) {
                $cart = array();
                foreach ($this->request->data['count'] as $index=>$count) {
                    if ($count>0) {
                        $productId = $this->request->data['id'][$index];
                        $cart[$productId] = $count;
                    }
                }
                $this->Cart->saveProduct($cart);
            }
        }
        $this->redirect(array('action'=>'view'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cart id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cart = $this->Carts->get($id);
        if ($this->Carts->delete($cart)) {
            $this->Flash->success(__('The cart has been deleted.'));
        } else {
            $this->Flash->error(__('The cart could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
