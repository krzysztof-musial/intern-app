<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Offer;

class Application extends Model
{
    use HasFactory;

    // Create a connection to Student model
    public function students()
    {
        return $this->belongsToMany(Student::class, 'applications');
    }

    // Create a connection to Offer model
    public function offers()
    {
        return $this->belongsToMany(Offer::class, 'applications');
    }
}
