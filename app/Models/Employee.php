<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $name
 * @property $lastname
 * @property $email
 * @property $birthday
 * @property $department
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'name' => 'required',
		'lastname' => 'required',
		'email' => 'required',
		'birthday' => 'required',
		'department' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','lastname','email','birthday','department'];

  //Scope

  public function scopeDepartment($query, $department)
  {
    if ($department)
      return $query->where('department', 'LIKE', "%$department%");
  }

}
