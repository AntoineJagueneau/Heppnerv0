<?php
/**
 * Date: 30/01/18
 * Time: 13:28
 */

namespace App\M;


use Core\Object;

class MarchandiseTypeModel extends Object
{
    protected static $_table='marchandiseType';

    public $id;
    public $libelle;
}