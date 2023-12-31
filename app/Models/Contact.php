<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;

class Contact extends Model
{
    public $fillable = ['full_name', 'email', 'phone', 'message'];

    use HasFactory;


    /**
     * Write code on Method
     *
     * @return response()
     */
    // public static function boot() {

    //     parent::boot();

    //     static::created(function ($item) {

    //         $adminEmail = "erickbale360@gmail.com";
    //         Mail::to($adminEmail)->send(new ContactMail($item));
    //     });
    // }
}
