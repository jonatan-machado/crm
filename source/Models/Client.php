<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * Class Client
 * @package Source\Models
 */
class Client extends Model
{
	/**
     * Client constructor.
     */
    public function __construct()
    {
        parent::__construct("client", ["id"], ["name", "email", "phone"]);
    }
    
}