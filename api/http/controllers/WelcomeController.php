<?php namespace Inveigle\Api\Http\Controllers;
use Illuminate\Routing\Controller;
use Cms\Classes\Theme;

class WelcomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $ben = Theme::load('inveigle');

        $config = $ben->getConfig();

        echo $config["author"];

        return view('inveigle.api::welcome');
    }

    public function getAuthor()
    {
      $ben = Theme::load('inveigle');

      $config = $ben->getConfig();

      return response()->json($config["name"]);
    }
}
