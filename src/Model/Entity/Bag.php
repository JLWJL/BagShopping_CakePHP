<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bag Entity
 *
 * @property int $bagID
 * @property string $bagName
 * @property int $supplierID
 * @property int $categoryID
 * @property float $price
 * @property string $description
 * @property string $imagePath
 */
class Bag extends Entity
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
        '*' => true,
        'bagID' => false
    ];
}
