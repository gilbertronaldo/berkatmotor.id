<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $categories = $this->getJsonFile('product-categories');
        $products = $this->getJsonFile('products');

        return view('pages.home', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    private function getJsonFile(string $fileName)
    {
        $file = file_get_contents(resource_path('/json/' . $fileName . '.json'));
        return json_decode($file, true);
    }
}
