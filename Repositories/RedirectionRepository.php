<?php

namespace App\Twill\Capsules\Redirections\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Redirections\Models\Redirection;

class RedirectionRepository extends ModuleRepository
{
    

    public function __construct(Redirection $model)
    {
        $this->model = $model;
    }
}
