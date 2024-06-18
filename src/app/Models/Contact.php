<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

        protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'email',
        'tel',
        'address',
        'content'
        ];

        public static $rules = array(
        'last_name' => 'required',
        'first_name' => 'required',
        'gender' => 'required',
        'email'=> 'required',
        'tel'=> 'required',
        'address'=> 'required',
        'content'=> 'required'
        );

    public function getDetail()
    {
        $txt = 'ID:' . $this->id . ' ' . $this->last_name . ' ' .  $this->first_name . ' ' . $this->gender . ' ' . $this->email
        . ' ' . $this->tel . ' ' . $this->address . ' ' .$this->content;
        return $txt;
    }
    public function management()
    {
        return $this->hasOne('App\Models\Management');
    }
}