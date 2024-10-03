<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $table ='contact_form_submissions';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',

    ];
}
