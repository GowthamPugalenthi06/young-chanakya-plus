<?php
namespace App\Http\Controllers\Admin;

use App\Homes;
use App\Http\Controllers\Controller;
use App\Models\Home;
use DB;
use File;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function showMentors()
{
    $mentors = Homes::all(); 
    return view('yc.home', compact('mentors'));
}

}
