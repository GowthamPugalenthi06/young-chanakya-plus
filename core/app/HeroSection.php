<?php
namespace App;

use Illuminate\Support\Facades\DB;

class HeroSection
{
    public static function getContent()
    {
        return DB::table('hero_sections')->where('id', 1)->first();
    }

    public static function updateContent($data)
    {
        return DB::table('hero_sections')->where('id', 1)->update($data);
    }
}
