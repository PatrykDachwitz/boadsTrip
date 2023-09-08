<?php

namespace App\Repository\Eloquent;

use App\Models\ocean;

class OceansRepository implements \App\Repository\OceansRepository
{
    private $ocean;
    public function __construct() {
        $this->ocean = new ocean();
    }

    public function show(int $id)
    {
        // TODO: Implement show() method.
    }

    public function all()
    {
        return $this->ocean
            ->all();
    }
}
