<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property string $CustomerID
 * @property string $CompanyName
 * @property string $ContactName
 * @property string $ContactTitle
 * @property string $Address
 * @property string $City
 * @property string $Region
 * @property string $PostalCode
 * @property string $Country
 * @property string $Phone
 * @property string $Fax
 */
class Customer extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'CompanyName' => true,
        'ContactName' => true,
        'ContactTitle' => true,
        'Address' => true,
        'City' => true,
        'Region' => true,
        'PostalCode' => true,
        'Country' => true,
        'Phone' => true,
        'Fax' => true,
    ];
}
