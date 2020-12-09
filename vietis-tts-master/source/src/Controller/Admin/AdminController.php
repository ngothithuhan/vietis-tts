<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AdminController extends AppController
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->viewBuilder()->setLayout('Admin/default');
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'pass'
                    ]
                ]
            ],
            'loginRedirect' => [
                'controller' => 'Dashboard',
                'action' => 'index',
                'prefix' => 'admin'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
                'prefix' => 'admin'
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
                'prefix' => 'admin'
            ],
            'authorize' => ['Controller'],
            'unauthorizedRedirect' => $this->referer()
        ]);
         // $this->Auth->allow(['display']);
          // $this->Auth->allow(['display', 'view', 'index']);
    }

    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        return $user;
    }

    // public function beforeFilter(Event $event)
    // {
    //      $this->Auth->allow(['index', 'view', 'display']);
    // }
}
