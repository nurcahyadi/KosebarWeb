<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = ['id_user','item_id','metode_pembayaran','bukti_pembayaran','status'];
}
