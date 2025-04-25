<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('yc.home');
    }

    public function about(){
        return view('yc.about');
    }

    
    public function membership(){
        return view('yc.membership');
    }

    
    public function mentorTeam(){
        return view('yc.team.mentor-team');
    }

    
    public function advisoryTeam(){
        return view('yc.team.advisory-team');
    }

    
    public function academicTeam(){
        return view('yc.team.academic-team');
    }

    
    public function vcTeam(){
        return view('yc.team.vc-team');
    }

    
    public function managementTeam(){
        return view('yc.team.management-team');
    }

    
    public function program(){
        return view('yc.program.program');
    }

    
    public function learning(){
        return view('yc.program.learning');
    }

    
    public function outcomes(){
        return view('yc.program.outcomes');
    }

    
    public function ceo(){
        return view('yc.chanakyas.ceo-md');
    }

    
    public function executives(){
        return view('yc.chanakyas.executives');
    }

    
    public function fortune(){
        return view('yc.chanakyas.fortune500');
    }

    
    public function unicornFounders(){
        return view('yc.chanakyas.unicorn-founders');
    }

    
    public function aboutChanakya(){
        return view('yc.about-chanakya');
    }

    
    public function becomeChanakya(){
        return view('yc.become-a-chanakya');
    }

    
    public function becomeSponsor(){
        return view('yc.become-a-sponsor');
    }

    
    public function blog(){
        return view('yc.blog');
    }

    
    public function career(){
        return view('yc.career');
    }

    
    public function caseStudies(){
        return view('yc.case-studies');
    }

    
    public function founder(){
        return view('yc.founder');
    }

    
    public function institution(){
        return view('yc.institution-collaboration');
    }

    
    public function podcast(){
        return view('yc.podcast');
    }

    
    public function privacy(){
        return view('yc.privacy-policy');
    }

    
    public function terms(){
        return view('yc.terms-and-conditions');
    }

    
    public function video(){
        return view('yc.video-series');
    }

    
    public function club(){
        return view('yc.clubs&activities');
    }
}
