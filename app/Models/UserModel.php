<?php

namespace App\Models;

use Myth\Auth\Models\UserModel as MythModel;

class UserModel extends MythModel
{
    protected $returnType = 'App\Entities\User';

    protected $allowedFields = [
        'email', 'username', 'password_hash',
        'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active',
        'force_pass_reset', 'permissions', 'deleted_at',
        // add new fields here
        'first_name', 'last_name', 'phone',
        'avatar'
    ];

    protected $validationRules = [

        // 'first_name'    => 'required',
        // 'last_name'     => 'required',
        // 'phone'        => 'required',
    ];

    public function getUserById($userId)
    {
        return $this->where('id', $userId)->first();
    }

    public function getTotalVolunteerHours($userId)
    {
        $builder = $this->db->table('register');
        $builder->selectSum('events.volunteer_hrs');
        $builder->join('events', 'events.id = register.event_id');
        $builder->where('register.user_id', $userId);
        $query = $builder->get();

        $row = $query->getRow();
        return $row->volunteer_hrs;
    }
}
