<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * Class Schedule
 * @package Source\Models
 */
class Schedule extends Model
{
	/**
     * Schedule constructor.
     */
    public function __construct()
    {
        parent::__construct("scheduling", ["id"], ["id_client", "data_query", "status", "id_type_services", "id_users"]);
    }
    
    /**
     * @return bool
     */
    public function save(): bool
    {
        $checkUri = (new Post())->find("uri = :uri AND id != :id", "uri={$this->uri}&id={$this->id}");

        if ($checkUri->count()) {
            $this->uri = "{$this->uri}-{$this->lastId()}";
        }
        return parent::save();
    }

}