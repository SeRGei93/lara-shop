<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Repositories\Admin\MainRepository;
use App\Repositories\Admin\OrderRepository;
use App\Repositories\Admin\ProductRepository;

use Illuminate\Http\Request;
use MetaTag;

class MainController extends AdminBaseController
{

    private $orderRepository;

    private $productRepository;

    public function __construct()
    {
        parent::__construct();
        $this->orderRepository = app(OrderRepository::class);
        $this->productRepository = app(ProductRepository::class);
    }

    public function index()
    {
        $countOrders = MainRepository::getCountOrders();
        $countUsers = MainRepository::getCountUsers();
        $countProducts = MainRepository::getCountProducts();
        $countCategories = MainRepository::getCountCategories();


        $lastOrders = $this->orderRepository->getAllOrders(7);
        $lastProducts = $this->productRepository->getLastProducts(4);

        MetaTag::setTags(['title' => 'Админ панель']);
        return view('blog.admin.main.index', compact(
            'countOrders',
            'countUsers',
            'countProducts',
            'countCategories',
            'lastProducts',
            'lastOrders'
        ));
    }
}
