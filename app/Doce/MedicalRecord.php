<?php

namespace App\Doce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MedicalRecord
 * @package App\Doce
 * @mixin \Eloquent
 */
class MedicalRecord extends Model
{
    use SoftDeletes;
}
