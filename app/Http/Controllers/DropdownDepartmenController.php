<?php

namespace App\Http\Controllers;

use App\Http\Resources\DropdownDepartmenResource;
use App\Models\Department;
use Illuminate\Http\Request;

class DropdownDepartmenController extends Controller
{
    public function index()
    {
        return DropdownDepartmenResource::collection(Department::all());
    }
}
