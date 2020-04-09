<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;

/**
 * Class BaseModel
 * @package App\Models
 * @mixin QueryBuilder
 * @mixin EloquentBuilder
 */
abstract class BaseModel extends Model
{

}
