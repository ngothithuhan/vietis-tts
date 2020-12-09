<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    

    /**
     * Display method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function display($id = null)
    {
        // $product = $this->Products->get($id, [
        //     'contain' => ['Categories', 'Orders']
        // ]);

        // $product = $this->Products->get($id, [
        //     'contain' => ['Categories']
        // ]);


        // $this->set('product', $product);
    }
}
