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

    /**
     * @param string $uri
     * @param string $columns
     * @return null|Type 
     */
    public function findByUri(string $uri, string $columns = "*"): ?Type
    {
        $find = $this->find("uri = :uri", "uri={$uri}", $columns);
        return $find->fetch();
    }
}