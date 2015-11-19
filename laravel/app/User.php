<?php
namespace App;

use Jenssegers\Mongodb\Model as Eloquent;
use Illuminate\Database\Eloquent\Model;
class User extends Eloquent
{
	protected $collection='user';
}