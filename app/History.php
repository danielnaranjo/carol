<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'id';
    protected $casts = [
		'invoice_id' => 'int',
		'user_id' => 'int',
        'product_id' => 'int',
        'qty' => 'int',
	];

	// protected $dates = [
	// 	'created'
	// ];
    //
	// protected $fillable = [
	// 	'invoice_id',
	// 	'user_id',
	// 	'amount',
	// 	'created'
	// ];

    public function facturas()
    {
        return $this->hasMany('App\Invoice','id','invoice_id');
    }
    public function productos()
    {
        return $this->belongsTo('App\Product','product_id', 'id');
    }
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
