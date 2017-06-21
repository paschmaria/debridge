<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function bridgeCode()
    {
        return $this->hasOne('App\Models\BridgeCode');
    }
}
