<?php  
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserEditRequest;
use App\User;
use App\Article;
use App\Role;

class UserController extends Controller {
    public function __construct() {
     $this->middleware('auth');
     }
    public function index() {

     }
    public function create() {

     }
    public function store() {
         
     }
    public function show() {

     }    
    public function edit() {

     } 
    public function update() {
         
     } 
     public function destroy() {
          
     } 
}

?>