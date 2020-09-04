<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wear extends Model{

//attributes id, name, price, created_at, updated_at
    protected $fillable = ['gender','color','brand','category','type'];

    public function getId(){
        return $this->attributes['id'];
    }
    public function setId($id){
        $this->attributes['id'] = $id;
    }

    public function getGender(){
        return $this->attributes['gender'];
    }
    public function setGender($gender){
        $this->attributes['gender'] = $gender;
    }

    public function getColor(){
        return $this->attributes['color'];
    }
    public function setColor($color){
        $this->attributes['gender'] = $color;
    }

    public function getBrand(){
        return $this->attributes['brand'];
    }
    public function setBrand($brand){
        $this->attributes['brand'] = $brand;
    }

    public function getCategory(){
        return $this->attributes['category'];
    }
    public function setCategory($category){
        $this->attributes['gender'] = $category;
    }

    public function getType(){
        return $this->attributes['type'];
    }
    public function setType($type){
        $this->attributes['type'] = $type;
    }
}
