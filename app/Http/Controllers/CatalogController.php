<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class CatalogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	

	
	

	public function getIndex()
	{
		try{
			$arrayPeliculas = Movie::all();
			return view('catalog.index',['arrayPeliculas' => $arrayPeliculas]);
		}
		catch(PDOExeption $e){
			echo $e;
		}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		
		return view('catalog.create');
	}

	public function postCreate(Request $request){
		$movie = new Movie();
		if($request->has('title') && $request->has('year') && $request->has('director')
		 && $request->has('poster') && $request->has('synopsis')
		)
		{
		$movie->title = $request->title;
		$movie->year = $request->year;
		$movie->director = $request->director;
		$movie->poster = $request->poster;
		$movie->synopsis = $request->synopsis;
		$movie->save();
		return redirect('/catalog');
		}
		else{
		return redirect('/home');
		}
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id)
	{
		$arrayPeliculas = Movie::findOrFail($id);
		return view('catalog.show',['pelicula' => $arrayPeliculas]) ;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
		$arrayPeliculas = Movie::findOrFail($id);
		return view('catalog.edit', ['pelicula' => $arrayPeliculas]);
	}

	public function postEdit(Request $request, $id){
		$movie = new Movie();
		$movie = Movie::find($id);
		$movie->title = $request->title;
		$movie->year = $request->year;
		$movie->director = $request->director;
		$movie->poster = $request->poster;
		$movie->synopsis = $request->synopsis;
		$movie->save();
		return redirect('/catalog/show/' . $id);
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
