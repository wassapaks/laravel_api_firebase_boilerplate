<?php

namespace App\Repositories;
use App\Models\User;    
use App\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function index(){
        return User::all();
    }
    
    public function getById($id){
        return User::findOrFail($id);
    }

    public function store(array $data){
        return User::create($data);
    }

    public function update(array $data, $id){
        return User::whereId($id)->update($data);
    }

    public function destroy($id){
        return User::destroy($id);
    }

    public static function getByIdUser($id){
        return User::select('id', 'name', 'role_id')->where('id', $id)->first();
    }
}