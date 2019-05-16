<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\CuentaUsuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'rut' => ['required', 'string', 'min:8', 'max:10', 'unique:cuenta_usuarios'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


      $input=CuentaUsuario::create([
          'rut' => $data['rut'],
          'nombre1' => $data['nombre1'],
          'nombre2' => $data['nombre2'],
          'apellidoM' => $data['apellidoM'],
          'apellidoP' => $data['apellidoP'],
          'genero' => $data['genero'],
          'fechaNacimiento' => $data['fechaNacimiento'],
          'telefono' => $data['telefono'],
          'peso' => $data['peso'],
          'peso' => $data['peso'],

      ]);

      $lastInsertedId=$input->idCuenta;

        return User::create([
            'idCuenta' =>   $lastInsertedId,
            'email' => $data['email'],
            'rol' => null,
            'password' => Hash::make($data['password']),
        ]);
    }
}
