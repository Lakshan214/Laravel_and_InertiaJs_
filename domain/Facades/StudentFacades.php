<?php
namespace domain\Facades;

use domain\Services\StudentServies;
use Illuminate\Support\Facades\Facade;


class StudentFacades extends Facade{

    protected static function getFacadeAccessor()
    {
        return StudentServies::class;
    }
}