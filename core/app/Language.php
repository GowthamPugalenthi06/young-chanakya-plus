<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
  protected $fillable = ['id', 'name', 'is_default', 'code', 'rtl'];

  public function basic_setting()
  {
    return $this->hasOne('App\BasicSetting');
  }

  public function basic_extended()
  {
    return $this->hasOne('App\BasicExtended', 'language_id');
  }

  public function basic_extra()
  {
    return $this->hasOne('App\BasicExtra', 'language_id');
  }

  public function pages()
  {
    return $this->hasMany('App\Page');
  }

  public function blogs()
  {
    return $this->hasMany('App\Blog');
  }
  public function event_categories()
  {
    return $this->hasMany('App\EventCategory', 'lang_id');
  }
  public function events()
  {
    return $this->hasMany('App\Event', 'lang_id');
  }


  public function popups() {
      return $this->hasMany('App\Popup');
  }
}
