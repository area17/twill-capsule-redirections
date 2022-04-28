<?php

namespace App\Twill\Capsules\Redirections\Http\Requests;

use A17\Twill\Http\Requests\Admin\Request;
use App\Twill\Capsules\Redirections\Rules\IsFullUrl;

class RedirectionRequest extends Request
{
    public function rulesForCreate(): array
    {
        return ['from' => ['required', new IsFullUrl()], 'to' => ['required', new IsFullUrl()]];
    }

    public function rulesForUpdate(): array
    {
        return $this->rulesForCreate();
    }
}
