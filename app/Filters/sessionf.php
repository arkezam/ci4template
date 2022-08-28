<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Sessionf implements FilterInterface {

    public function before(RequestInterface $request, $arguments = null){
        $session = session();
        if(!$session->get('login')) {
            return redirect()->route('/'); 
        }
    }
    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){
        // Do something here
        }

}