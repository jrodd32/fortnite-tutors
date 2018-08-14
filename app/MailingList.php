<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{
    protected $fillable = [
      'name', 'email', 'account_type'
    ];
}
