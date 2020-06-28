<?php

namespace App\Http\Controllers\Front;

use App\Models\Admin\Course;
use App\Models\Admin\Sechdule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  index(){
        $userProfile = Auth::user();
        $Displaies=Course::get();
        $coursesTime = Sechdule::get();
        return view('front.profile' , compact('userProfile' ,'Displaies' , 'coursesTime'));
    }

}
