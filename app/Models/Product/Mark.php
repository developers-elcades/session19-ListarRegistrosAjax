<?php

namespace Market\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    //
      protected $table = 'marks';

      protected $primarykey = 'id';

      public $timestamps = false;
      

      protected $fillable = [
         'id','name'
      ];


      public function product ()
      {
         // belongsto --- pertenece a
         return $this->belongsto(Product::class);

      }


}
