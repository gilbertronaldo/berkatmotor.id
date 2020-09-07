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
            'products'   => $products,
        ]);
    }

    /**
     * @param string $productCategory
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function product(string $productCategory)
    {
        $products = collect($this->getJsonFile('products'))
            ->filter(static function ($product) use ($productCategory) {
                return $product['category'] === $productCategory;
            })
            ->values()
            ->toArray();

        $categories = $this->getJsonFile('product-categories');
        $sub = collect($products)
            ->map(static function ($product) {
                if (!isset($product['sub'])) {
                    return 'Other';
                }
                return $product['sub'];
            })
            ->unique()
            ->map(static function ($sub) use ($products) {
                $products_ = collect($products)
                    ->filter(static function ($product) use ($sub) {
                        if (!isset($product['sub'])) {
                            return false;
                        }

                        return $product['sub'] === $sub;
                    })
                    ->values()
                    ->toArray();

                if ($sub === 'Other') {
                    $products_ = collect($products)
                        ->filter(static function ($product) use ($sub) {
                            if (!isset($product['sub'])) {
                                return true;
                            }
                        })
                        ->values()
                        ->toArray();
                }

                return [
                    'title'    => $sub,
                    'products' => $products_,
                ];
            })
            ->sortBy('title')
            ->values();

        return view('pages.product', [
            'categories' => $categories,
            'subCategories'   => $sub,
        ]);
    }

    private function getJsonFile(string $fileName)
    {
        $file = file_get_contents(resource_path('/json/' . $fileName . '.json'));
        return json_decode($file, true);
    }
}
