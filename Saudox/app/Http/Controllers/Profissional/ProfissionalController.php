<?php
namespace App\Http\Controllers\Profissional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Profissional;
use Auth;

class ProfissionalController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function home() {
        $profissional = Profissional::find(Auth::id());
        $profissoes = $profissional->getProfissoes();
		return view('profissional/home', ['profissoes' => $profissoes]);
	}


    public function ver_profissional($id) {
        $profissional = Profissional::find($id);
        if($profissional){
            return view('profissional/ver_profissional', ['profissional' => $profissional]);
        } else {
            return redirect()->route('erro', ['msg_erro' => "Profissional inexistente"]);
        }
    }


}