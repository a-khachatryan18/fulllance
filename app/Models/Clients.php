<?php
/**
 * Created by PhpStorm.
 * User: arevik
 * Date: 3/3/18
 * Time: 11:09 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';
    protected $fillable = ['first_name','last_name','email','password','country','notify'];
}