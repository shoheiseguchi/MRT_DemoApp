<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nickname extends Model
{
    public $timestamps = false;

    protected $fillable= array('name','from', 'nickname', 'sex', 'birthday', 'reason');
    protected $hidden = array('id');

    public function getData()
    {
        $name = $this -> name;
        $from = $this -> from;
        $nickname = $this -> nickname;

        return compact('name', 'from', 'nickname');
    }
}
