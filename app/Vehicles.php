<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
  protected $table="vehicles";
  public $timestamps=false;
  protected $primaryKey = 'vid';

  protected $fillable = [
      'category', 'vcode', 'vplate','regno','chassisno','owner' , 'apDate' , 'exDate', 'validExpiry' , 'validStatus' , 'rasic' , 'inspector' ,'vapproval','ras_center'
  ];

  protected $casts = [
      'apDate' => 'date:d/m/Y',
      'exDate' => 'date:d/m/Y',
  ];
}
