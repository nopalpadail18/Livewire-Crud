<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap', 'email', 'no_hp'];

    // public function message($message)
    // {
    //     session()->flash('message', $message);
    // }
}
