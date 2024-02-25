<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;

Class UserController extends Controller {
    private $request;
    
    public function __construct(Request $request){
        $this->request = $request;
    }
    public function getUsers(){
        $users = User::all();
        return $this->response($users, 200);
    }

    public function getUsers(){
        $users = User::all();
        return $this->response($users, 200);
        }
       }
       /**
        * Return the list of users
        * @return Illuminate\Http\Response
        */
        public function index()
        {
        $users = User::all();
        return $this->successResponse($users);
        
        }
}