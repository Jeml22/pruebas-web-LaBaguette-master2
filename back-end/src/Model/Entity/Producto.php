<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Producto Entity
 *
 * @property int $id_producto
 * @property string $precio
 * @property int $cantidad
 * @property string $nombre_p
 * @property int $id_referencia
 */
class Producto extends Entity
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
        'precio' => true,
        'cantidad' => true,
        'nombre_p' => true,
        'id_referencia' => true,
    ];
}
