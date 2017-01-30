<?php
namespace Addressmodule\ADDRESS\Controllers;

use Illuminate\http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use addressmodule\address\Repositories\AddressRepository;
use addressmodule\address\Models\Address;
use mainmodule\api\Controllers\ApiController;


class AddressController extends ApiController
{
   protected $AddressRepository;
   public function __construct(AddressRepository $AddressRepository) {
        
      $this->AddressRepository = $AddressRepository;
   }
   public function index()
   {
        try {
            $addresslist = $this->AddressRepository->getallrecords();
            $data['data'] = $addresslist;
            $this->setStatusCodeSuccess();
            return $this->respond($data);

        } catch (\Exception $e) {

            $this->setStatusCodeException();
            $data['message'] = $e->getMessage();
            return $this->respondFail($data);
        }
   }
}
