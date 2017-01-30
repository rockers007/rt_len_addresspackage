<?php
namespace addressmodule\address\Models;

use Illuminate\Database\Eloquent\Model;
use addressmodule\address\Models\Address;

class Address extends Model
{
    protected $table = 'Addresses';
    protected $primaryKey = 'Id';
    
    protected $fillable = ['Id','UserId','FullAddress','Country','State','City','Postalcode','Latitude','Longitude','ClientId','IsActive','IsDelete','	CreatedId','ModifiedId'];
    protected $visible = ['Id','UserId','FullAddress','Country','State','City','Postalcode','Latitude','Longitude','ClientId','IsActive','IsDelete','	CreatedId','ModifiedId'];
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}