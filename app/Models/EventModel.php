<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'events';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'App\Entities\Event';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'name',
        'location',
        'category',
        'date',
        'description',
        'volunteer_hrs',
        'active',
        'user_id',
        'image',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'name' => 'required',
        'location' => 'required',
        'category' => 'required',
        'date' => 'required',
        'description' => 'required',
        'volunteer_hrs' => 'required',
        'user_id' => 'required',


    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function paginateEventsByUserId($id)
    {
        return $this->where('user_id', $id)
            ->orderBy('created_at', 'DESC')
            ->paginate(2);
    }

    public function getEventByUserId($id, $user_id)
    {
        return $this->where('id', $id)
            ->where('user_id', $user_id)
            ->first();
    }

    public function getEventById($id)
    {
        return $this->where('id', $id)
            ->first();
    }


    public function getSubscribedUsers($eventId)
    {
        return $this->select('users.*')
            ->join('register', 'register.event_id = events.id')
            ->join('users', 'users.id = register.user_id')
            ->where('events.id', $eventId)
            ->findAll();
    }
}
