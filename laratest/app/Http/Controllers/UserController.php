<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
       
    }

    public function create(){
        return view('user.create');
    }

    public function add(Request $req){
        $users = $this->getUserList();
        $user = '';
        array_push($users,['id'=>$req->id,'username'=>$req->uname,'password'=>$req->password, 'email'=>$req->email]);

        return view('user.userlist')->with('userlist', $users);
    }


    public function details($id){
        
        $users = $this->getUserList();
        $user = '';

        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        //$user= ['id'=>1, 'name'=>'alamin', 'password'=>'123', 'email'=>'aa@aiub.edu','type'=>'user'];
        return view('user.details')->with('user', $user);
    }

    public function edit($id){
        $users = $this->getUserList();
        $user = '';

        foreach($users as $u){
            if($u['id'] == $id){
                $user = $u;
                break;
            }
        }
        return view('user.edit')->with('user', $user);
    }

    public function update(Request $req, $id){
        echo $id;

        $users = $this->getUserList();
        $user = '';

        foreach($users as $u =>$subArray){
            if($subArray['id'] == $id){
                $users[$u]['username']=$req->uname;
                $users[$u]['password']=$req->password;
                $users[$u]['email']=$req->email;
                $users[$u]['type']=$req->type;
                

                   
            }
        }
        return view('user.userlist')->with('userlist', $users);
        

    }

    public function delete($id){
        echo $id;
        $users = $this->getUserList();
        $user = '';

        

        foreach($users as $u => $subArray){
            if($subArray['id'] == $id){
                    unset($users[$u]);
            }
        }
           
        return view('user.userlist')->with('userlist', $users);


    }

    public function destroy($id){
        echo $id;
    }

    public function list(){
        $users = $this->getUserList();
        return view('user.userlist')->with('userlist', $users);
    }

    public function getUserList(){
        return [
            ['id'=>1, 'username'=>'alamin', 'password'=>'123', 'email'=>'email@aiub.edu', 'type'=>'admin'],
            ['id'=>2, 'username'=>'xyz', 'password'=>'223', 'email'=>'xyz@aiub.edu', 'type'=>'admin'],
            ['id'=>3, 'username'=>'abc', 'password'=>'124453', 'email'=>'abc@aiub.edu', 'type'=>'admin'],
        ];
    } 
}
