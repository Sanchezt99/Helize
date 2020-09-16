<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Item;
use App\User;

class Order extends Model
{
    protected $fillable = ['total', 'status'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getTotal()
    {
        return $this->attributes['total'];
    }

    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }

    public function getUserId()
    {
        return $this->attributes['userId'];
    }

    public function setUserId($userId)
    {
        $this->attributes['userId'] = $userId;
    }
    
    public function getStatus()
    {
        return $this->attributes['status'];
    }

    public function setstatus($status)
    {
        $this->attributes['status'] = $status;
    }

    public function items(){
        return $this->hasMany(Item::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}