<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPA extends Model
{
    use HasFactory;
    protected $table = "ipa";
    protected $guarded = ['id'];

    public function siswaIPA()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function siswaIPS()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
