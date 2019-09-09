<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
  public $guarded=[];

  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title', 'description', 'file'
  ];
}
