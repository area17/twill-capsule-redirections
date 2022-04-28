<?php

namespace App\Twill\Capsules\Redirections\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use App\Twill\Capsules\Redirections\Http\Requests\RedirectionRequest;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class RedirectionController extends BaseModuleController
{
    protected $moduleName = 'redirections';

    protected $titleColumnKey = 'from';

    protected $indexOptions = [
        'permalink' => false,
    ];

    protected $indexColumns = [
        'from' => [
            'title' => 'From',
            'field' => 'from',
        ],
        'to' => [
            'title' => 'To',
            'field' => 'to',
        ],
        'status_code' => [
            'title' => 'Status code',
            'field' => 'status_code',
        ],
    ];

    public function __construct(Application $app, RedirectionRequest $request)
    {
        parent::__construct($app, $request);
    }
}
