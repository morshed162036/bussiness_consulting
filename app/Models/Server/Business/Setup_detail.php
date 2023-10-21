<?php

namespace App\Models\Server\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Server\Business\Setup;
class Setup_detail extends Model
{
    use HasFactory;
    public function setup(){
        return $this->belongsTo(Setup::class,'setup_id');
    }
}
