<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductosFixture
 */
class ProductosFixture extends TestFixture
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
                'id_producto' => 1,
                'precio' => 1.5,
                'cantidad' => 1,
                'nombre_p' => 'Lorem ipsum dolor sit amet',
                'id_referencia' => 1,
            ],
        ];
        parent::init();
    }
}
