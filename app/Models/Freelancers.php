<?php
/**
 * Created by PhpStorm.
 * User: arevik
 * Date: 3/3/18
 * Time: 11:04 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Freelancers extends Model
{
    protected $table = 'freelancers';
    protected $fillable = ['first_name','last_name','email','password','country','username','notify'];
}
