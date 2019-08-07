<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * Class Time Services
 * @package Source\Models
 */
class Time extends Model
{
	/**
     * Time Services constructor.
     */
    public function __construct()
    {
        parent::__construct("allowed_time", ["id"], ["allowed_time_at"]);
    }
}