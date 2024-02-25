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

      /**
     * Return the list of users
     * @return Illuminate\Http\Response
     */
    public function index()
    {
    $users = User::all();
      // return $this->successResponse($users);
      return response()->json($users, 200); 
    }

    public function getUsers(){
        $users = User::all();
       // return $this->response($users, 200);
       return response()->json($users, 200);
    }
}
  