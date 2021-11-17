<?php

namespace App\Http\Controllers;


use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

//made with command: php artisan make:controller ArticlesController --resource
class ArticlesController extends Controller
{

    private $articles = [];
//
//    public function __construct(){
//        $numberArticles = 3;
//        for($i = 0; $i < $numberArticles; $i++) {
//            array_push($this->articles, array(
//                "id" => $i,
//                "title" => "Title " . $i,
//                "description" => "Description " . $i,
//                "image" => "http://localhost:8000/image" . $i . ".jpg" ));
//        }
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {

//        $this->articles = DB::select('select * from articles');
//        dd($this->articles);

//        $this->articles = DB::table('articles')->get();
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): view
    {
//        array_push($this->articles, array(
//            'id' => count($this->articles) + 1 ,
//            'title' => $request->input('title'),
//            'description' => $request->input('description')) );


        $articles = new Article();
        $articles->title = $request->input('title');
        $articles->text = $request->input('text');
        $articles->picture = $request->input('picture');
        $articles->save();
        return  view('articles.show',['article'=> $articles]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id): View
    {
        $article = Article::where('id',$id)->first();

        return  view('articles.show',[ 'article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        return  view('articles.edit',[ 'article'=>$this->articles[$id]]);
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
        $this->articles[$id] = [
            'id' => $id,
            'title'=> $request->input('title'),
            'description'=> $request->input('description')];
        print_r($this->articles);
        return redirect()->route('api.data', [$id]);
//        return  view('articles.show',['article'=>$this->articles[$id]]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): View
    {
        unset($this->articles[$id]);

        print_r($this->articles);
        return view('articles.index', ['articles' => $this->articles]);;
    }

    public function getData($id){
        return $this->articles[$id];
    }
}
