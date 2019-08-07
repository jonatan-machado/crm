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
        parent::__construct("scheduling", ["id"], ["id_client", "content", "id_type_services","id_user","id_schedule_at"]);
    }
    
    /**
     * @return bool
     */
    public function save(): bool
    {
        $checkScheduleAt = (new Schedule())->find("id_schedule_at = :id_schedule_at AND id != :id", "id_schedule_at={$this->id_schedule_at}&id={$this->id}");

        if (!$checkScheduleAt->count()) {
            return parent::save();
        }
        return false;        
    }

}