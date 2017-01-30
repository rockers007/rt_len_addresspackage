<?php

namespace addressmodule\address\Repositories;

use Illuminate\Database\QueryException;
use addressmodule\address\Models\Address;
use addressmodule\address\Exceptions\AddressException;
/**
 * Class UserRepository
 *
 * Address resources.
 */
class AddressRepository
{
    public function getallrecords()
    {
    	try {
            $addresslist = Address::all();
            return $addresslist;
        } catch (\Exception $e) {
            throw new AddressException('Exception thrown while trying to fetch Introgallerys', 50001001);
        }
    }
}