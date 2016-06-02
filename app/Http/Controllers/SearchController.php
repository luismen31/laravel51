<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class SearchController extends Controller
{
    public function getUsuarios(){
    	//si no es ajax, muestra error
    	if(!request()->ajax()) abort(403);

    	//Variable para anidar los datos obtenidos en la consulta
    	$data = array();

    	//Obtenemos todos los datos del bootstrap table
    	$datos = request()->all();

    	//Si no esta vacio search, buscara algo en especifico, sino trae todo los datos.
    	if(!empty($datos['search'])){
    		$users = User::where('name', 'like', '%'.$datos['search'].'%');
    	}else{
    		$users = User::where('id', '>', 0);
    	}

    	//Si selecciona un campo de filtro y no sta vacio, ordenara por el campo seleccionado
    	if(isset($datos['sort']) and !is_null($datos['sort'])){

    		if($datos['sort'] == 'name'){
    			$users = $users->orderBy('name', $datos['order']);

    		}elseif($datos['sort'] == 'email'){
    			$users = $users->orderBy('email', $datos['order']);
    		}
    	}
    	//Une toda la consulta y filtra por limit(take) y offset(skip) y devuelve los datos
    	$users = $users->select(\DB::raw('SQL_CALC_FOUND_ROWS *'))->take($datos['limit'])->skip($datos['offset'])->get();

        //Obtiene todos los registros
        $cant = \DB::select(\DB::raw("SELECT FOUND_ROWS() AS total;"));
        $cant = $cant[0]->total;

        //Recorremos los datos
        foreach($users as $user){

        	$url = '<a href="'.route('usuario', [$user->id]).'" class="btn btn-success"><i class="fa fa-edit"></i> Editar</a>';

        	//Almacenamos los datos en un arreglo anidado.
        	$data[] = [
        		'name' => $user->name,
        		'email' => $user->email,
        		'action' => $url
        	]; 
        }

        //retornamos los datos en json
        return \Response::json(['total' => $cant, 'rows' => $data]);
    }
}
