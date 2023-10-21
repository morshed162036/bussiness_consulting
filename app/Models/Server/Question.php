<?php

namespace App\Models\Server;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Server\Service\Service;
use App\Models\Server\Business\Setup;
class Question extends Model
{
    use HasFactory;
    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
    public function setup()
    {
        return $this->belongsTo(Setup::class,'setup_id');
    }
}
