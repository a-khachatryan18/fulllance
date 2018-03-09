<?php
/**
 * Created by PhpStorm.
 * User: arevik
 * Date: 3/3/18
 * Time: 11:04 PM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Freelancers extends Model implements Authenticatable
{
    use AuthenticableTrait;

    protected $guard = 'freelancer';
    protected $table = 'freelancers';
    protected $fillable = ['first_name','last_name','email','password','country','username','notify'];
}
