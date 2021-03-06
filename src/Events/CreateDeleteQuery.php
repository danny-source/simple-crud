<?php
declare(strict_types = 1);

namespace SimpleCrud\Events;

use SimpleCrud\Query\Delete;

class CreateDeleteQuery
{
    private $query;

    public function __construct(Delete $query)
    {
        $this->query = $query;
    }

    public function getQuery(): Delete
    {
        return $this->query;
    }
}
