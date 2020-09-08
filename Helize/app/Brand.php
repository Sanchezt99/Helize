<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name','idBrand'];

    public function getIdBrand()
    {
        return $this->attributes['idBrand'];
    }
    public function setIdBrand($idBrand)
    {
        $this->attributes['idBrand'] = $idBrand;
    }

    public function getNameBrand()
    {
        return $this->attributes['name'];
    }
    public function setNameBrand($name)
    {
        $this->attributes['name'] = $name;
    }
}
