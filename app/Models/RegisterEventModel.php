<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterEventModel extends Model
{
    protected $table = 'register';
    protected $allowedFields = [
        'user_id',
        'event_id', 
        'attend',
        'type'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';


    public function registerEvent($data)
    {
        $builder = $this->db->table($this->table);
        $builder->insert($data);
    }
}
