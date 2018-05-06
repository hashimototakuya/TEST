<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $pass
 * @property int $division_id
 * @property int $role_id
 * @property int $authority_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Division $division
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Authority $authority
 */
class User extends Entity
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
    protected $_accessible = [
        'name' => true,
        'pass' => true,
        'division_id' => true,
        'role_id' => true,
        'authority_id' => true,
        'created' => true,
        'modified' => true,
        'division' => true,
        'role' => true,
        'authority' => true
    ];
}