<?php

namespace App\Http\Controllers;

use App\Http\Resources\DropdownUserResource;
use App\Models\User;
use Illuminate\Http\Request;

class DropdownUserController extends Controller
{
    public function index()
    {
        return DropdownUserResource::collection(User::all());
    }
}
