<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller {
    
    public function create() {
        
        return view('auth.login');
    }

    public function store() {
        
        /**validando si el usuario ingresa mal los datos*/
        if(auth()->attempt(request(['name', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El nombre o contraseña son incorrectos. Intente de nuevo, por favor',
            ]);

        } else {
            /**sino, si se inicia sesión, que lleve a la página o dashboard de administrador */
            if(auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            } else

                if(auth()->user()->role == 'cajero') {
                return redirect()->route('cajero.index');
            } else 
                if(auth()->user()->role == 'contador') {
                return redirect()->route('contador.index');
            
            } else{
                return redirect()->to('/');
            }
                
            
        }
        
        /**sino, si se inicia sesión, que lleve a la página o dashboard de cajero */
        
    }

    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}
