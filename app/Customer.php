<?php

namespace dokimi;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'status'];

    public function scopeActive($query)
    {
        return $query->where('status', 1)->paginate(3);

    }

    public function scopeInactive($query)
    {
        return $query->where('status', 0)->paginate(3);

    }
}
