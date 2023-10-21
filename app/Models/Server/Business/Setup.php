<?php

namespace App\Models\Server\Business;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Server\Business\Setup_detail;
class Setup extends Model
{
    use HasFactory;
    public function setup_details()
    {
        return $this->hasOne(Setup_detail::class,'setup_id');
    }
}
