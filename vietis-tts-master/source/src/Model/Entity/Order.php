<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $users_id
 * @property \Cake\I18n\FrozenTime $delivery_at
 * @property string $code
 * @property int $status
 * @property string $address
 * @property int $phone_repicient
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property string $name_repicient
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Product[] $products
 */
class Order extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    //protected $primaryKey = 'id';
    
    protected $_accessible = [
        'users_id' => true,
        'delivery_at' => true,
        'code' => true,
        'status' => true,
        'address' => true,
        'phone_recipient' => true,
        'name_recipient' => true,
        'created_at' => true,
        'updated_at' => true,
        'product_id' => true,
        'user' => true,
        'product' => true
    ];
}
