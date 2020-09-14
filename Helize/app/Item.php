<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wear;
use App\Order;

class Item extends Model
{
    //attributes id, Wear_id, order_id, quantity created_at, updated_at

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($q)
    {
        $this->attributes['quantity'] = $q;
    }

    public function getWearId()
    {
        return $this->attributes['wear_id'];
    }

    public function setWearId($id)
    {
        $this->attributes['wear_id'] = $id;
    }

    public function getOrderId()
    {
        return $this->attributes['order_id'];
    }

    public function setOrderId($id)
    {
        $this->attributes['order_id'] = $id;
    }

    public function wear(){
        return $this->belongsTo(Wear::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }

}