<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Carbon\Carbon;


class UserController extends Controller
{
 
  public function index(){
    $users = User::all();

    //carregar a view 
    return view('users.index', compact('users'));
  }


    public function create(){

      //carregar a view
      return view('users.create');
    }

    public function store(UserRequest $request){

      //validar o formulário
      $request->validated();
      //cadastro do usuário
      User::create ([
        'name' => $request->name,
        'setor' => $request->setor,
        'cidade' => $request->cidade,
       'data_checkin' => Carbon::now()->format('d/m/Y H:i:s') 
      ]);
       //mensagem de sucesso
      return redirect()->route('user.index')->with('sucess' ,'Usuário cadastrado com sucesso!');

      
    }

    public function edit(User $user){

      return view('users.edit', ['user' => $user]);
      
    }


    public function update(UserRequest $request,User $user){
       //nova validação para a edição de usuário

       $request->validated();

       //editar as infroemações

       $user->update([
        'name' => $request->name,
        'setor' => $request->setor,
        'cidade' => $request->cidade

       ]);

       //mensagem de sucesso na alteração
       return redirect()->route('user.index')->with('sucess', "Alteração realizada com Sucesso!");

    }
  
    public function destroy(User $user){
      //funcionalidade de apagar
      $user->delete();

      //mensagem de sucesso na ação
      return redirect()->route('user.index')->with('sucess' ,"Usuário excluído com sucesso!");

    }

}
