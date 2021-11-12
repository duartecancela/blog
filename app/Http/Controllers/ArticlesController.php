<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

//made with command: php artisan make:controller ArticlesController --resource
class ArticlesController extends Controller
{

    private $articles = array ();

    public function __construct(){
        $numberArticles = 3;
        for($i = 1; $i <= $numberArticles; $i++) {
            array_push($this->articles, array(
                "id" => $i,
                "title" => "Title " . $i ,
                "description" => "Description " . $i));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        print_r($this->articles);
        return view('articles.index', ['articles' => $this->articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('articles.create', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): View
    {
        array_push($this->articles, array(
            'id' => count($this->articles) + 1 ,
            'title' => $request->input('title'),
            'description' => $request->input('description')) );

        print_r($this->articles);
        return  view('articles.show',['article'=>$this->articles[count($this->articles) - 1]]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id): View
    {

        return  view('articles.show',[ 'article'=>$this->articles[$id - 1]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
