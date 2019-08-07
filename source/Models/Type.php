<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * Class Type Services
 * @package Source\Models
 */
class Type extends Model
{
	/**
     * Type Services constructor.
     */
    public function __construct()
    {
        parent::__construct("type_services", ["id"], ["name", "uri"]);
    }
}