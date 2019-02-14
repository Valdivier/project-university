<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Datatables;
use App\Movies;

class MoviesController extends Controller
{
    //
     public function loadmovies(Request $request)
    { 
	   $peliculas = DB::table('movies')->select('movies.id','movies.pelicula','movies.categoria', 'movies.descripcion', 'movies.director', 'movies.fecha', 'movies.url' , 'movies.img')->get();
	    
       // $request->user()->authorizeRoles(['user', 'admin']);    
        return view('index')->with(['peliculas'=>$peliculas]);  
    }

    public function viewdetailmovies($id)
    { 
    		$peliculas = DB::select("SELECT movies.pelicula, movies.categoria, movies.descripcion, movies.director, movies.fecha,movies.url, movies.img from movies where movies.id = '$id'");
    	
        return view('catalog.movies-viewdetail')->with(['peliculas'=>$peliculas]); 
    }

     public function get()
    {
        $consulta = DB::SELECT("SELECT movies.id as clave, movies.pelicula as pelicula, movies.categoria as categoria, movies.descripcion as descripcion, movies.director as director, movies.fecha as fecha, movies.img as img from movies");
        
        return datatables()->of($consulta)->toJson();
    }

    public function admindelete(Request $request)
    {
        if($request->ajax())
        {
            $elimi = Movies::find($request->intIdMovie);
            $elimi->delete();
            
            return response()->json([
                'total' => "hola",
                'pro' => "chinchero"
            ]);
        }
    }

     public function adminupdate(Request $request)
    {
        if($request->ajax())
        {
            $actua = Movies::find($request->actualizacion);
            $actua->pelicula = $request->pelicula;
            $actua->categoria = $request->categoria;
            $actua->descripcion = $request->descripcion;
            $actua->director = $request->director;
            $actua->fecha = $request->fecha_update;
            $actua->save();
            return response()->json([
                'total' => 'Logrado'
            ]);
        }
    }

    public function admincreate(Request $request)
    {
        $busqueda = DB::SELECT("SELECT pelicula FROM movies WHERE pelicula = '$request->pelicula'");
        if($busqueda){}else{

            
 
            if($request->ajax()){
                $new_movie = new Movies();
                $new_movie->pelicula = $request->pelicula;
                $new_movie->categoria =  $request->categoria;
                $new_movie->descripcion = $request->descripcion;
                $new_movie->director = $request->director;
                $new_movie->fecha = $request->fecha_update;
                $new_movie->url = $request->url_video;

                /**
                $img = $request->avatar;

                $filename = time() . '.' . $img->getClientOriginalExtension();  

                Image::make($img)->resize(555, 335)->save( public_path('images/movies/' . $filename));   */

                $new_movie->img = $filename;
                $new_movie->save();
                return response()->json([
                    'si'=>'si_agrego'
                ]);
            }
        }
    }

}
