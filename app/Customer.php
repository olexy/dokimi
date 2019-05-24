<?php

namespace dokimi;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //fillable option
    // protected $fillable = ['name', 'email', 'status'];

    //Guarded option
    protected $guarded =[];

    public function scopeActive($query)
    {
        return $query->where('status', 1)->paginate(3);

    }

    public function scopeInactive($query)
    {
        return $query->where('status', 0)->paginate(3);

    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
