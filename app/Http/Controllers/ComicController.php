<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //recupero tutti i comic dal database e poi li ritorno al file view

        $comics = Comic::all();

        return view("comics.index", compact("comics"));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ritorna la view create di comics
        return view("comics.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // richiedo i dati ottenuti tramite il form 
        //creo una nuova istanza di Comic e gli assegno i dati del comic appena aggiunto
        //per poi salvarli successivamente a database 

        $data = $request->all();

        $newComic = new Comic();

        $newComic->fill($data);
        $newComic->save();

        /**
         * Questa funzione crea una nuova istanza di Faq, esegue il fill() ed infie il save()
         */
        // $newFaq = Faq::create($data);

        // Come risultato deve fare un redirect sulla rotta show dell'elemento appena creato
        return redirect()->route("comics.show", $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          // leggo i dati associati all'id ricevuto
          $comic = Comic::findOrFail($id);

          // Dietro le quinte il find fa questo
          // $faq = Faq::where("id", $id)->first();
  
          // ritorniamo la view dello show
          return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //ricavo l'id del comic da modificare e passo i suoi dati alla view comics.edit

        $comic = Comic::findOrFail($id);
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);
        $data =  $request->all();
        
        $comic->update($data);


        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route("comics.index");
    }
}
