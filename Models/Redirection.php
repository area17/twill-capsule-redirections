<?php

namespace App\Twill\Capsules\Redirections\Models;

use A17\Twill\Models\Model;

/**
 * @property string $from
 * @property string $to
 * @property int $status_code
 */
class Redirection extends Model
{
    protected $fillable = ['published', 'from', 'to', 'status_code'];

    public function save(array $options = []): bool
    {
        $this->from = $this->sanitize($this->from);

        $this->to = $this->sanitize($this->to);

        return parent::save($options);
    }

    private function sanitize($string): string
    {
        return rtrim($string, '/');
    }
}
