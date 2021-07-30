<?php

namespace App\Models;

use App\Libraries\MySql;
use PDO;

class EmploymentModel extends Model
{
    // Name of the table
    protected static $table = "employment";

    // Max number of records when fetching all records from table
    protected static $limit;

    // Non writable fields
    protected static $guarded = [
        'id',
        'updated',
        'deleted',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Get jobs from certrain user
     * @param $user_id (int) the ID of the user
     * @return object user data
     */
    public static function userEmployment($user_id)
    {
        if ((int)$user_id === 0) {
            return false;
        }

        $sql = "SELECT * FROM " . self::$table . " WHERE userid=". $user_id . " AND deleted IS NULL";
        

        return MySql::query($sql)->fetchAll(PDO::FETCH_CLASS);
    }
}