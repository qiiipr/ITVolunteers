<?php

namespace App\Models;

use CodeIgniter\Model;
use Myth\Auth\Models\GroupModel as MythGroupModel;


class GroupModel extends MythGroupModel
{

    protected $returnType = 'App\Entities\Group';
    protected $allowedFields = [];
    protected $afterInsert = [];
}
