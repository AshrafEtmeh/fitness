<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RecordPlan extends Pivot
{
    use HasFactory;
    protected $guarded = [];

    protected $table = "record_plans";
}
