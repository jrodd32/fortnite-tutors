<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{
    protected $fillable = [
      'name', 'email', 'account_type'
    ];

    // Explicitly set table to singular version
    // Laravel assumes pural
    protected $table = 'mailing_list';
}
