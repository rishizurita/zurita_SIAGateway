<?php

namespace App\Http\Controllers;

//use App\Models\User;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;
use App\Services\User1Service;

class UserController extends Controller
{
    private $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    /* Helper method to return a successful JSON response */
    protected function successResponse($data, $code = Response::HTTP_OK){
        return response()->json(['data' => $data], $code);
    }

    /* Helper method to return an error JSON response */
    protected function errorResponse($message, $code){
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

    /* Return the list of users */
    public function index(){

    }

    /* Get all users */
    public function getUsers(){

    }

    /*Add a new user*/
    public function add(Request $request){

    }

    /*Show details of a single user*/
    public function show($id){

    }

    /*Update an existing user*/
    public function update(Request $request, $id){
    }

    /* Delete a user */
    public function delete($id){

    }
}
