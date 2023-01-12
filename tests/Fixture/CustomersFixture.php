<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CustomersFixture
 */
class CustomersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'CustomerID' => '9faa23db-0381-4e8d-9c9a-2d14a3f043a2',
                'CompanyName' => 'Lorem ipsum dolor sit amet',
                'ContactName' => 'Lorem ipsum dolor sit amet',
                'ContactTitle' => 'Lorem ipsum dolor sit amet',
                'Address' => 'Lorem ipsum dolor sit amet',
                'City' => 'Lorem ipsum d',
                'Region' => 'Lorem ipsum d',
                'PostalCode' => 'Lorem ip',
                'Country' => 'Lorem ipsum d',
                'Phone' => 'Lorem ipsum dolor sit ',
                'Fax' => 'Lorem ipsum dolor sit ',
            ],
        ];
        parent::init();
    }
}
