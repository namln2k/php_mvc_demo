<?php
class ProductController extends BaseController {
    private $productModel;

    public function __construct() {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel();
    }

    public function index() {
        $order = ['column' => 'id', 'orderType' => 'desc'];

        $products = $this->productModel->getAll(order: $order);

        $this->view('frontend.products.index', [
            'pageTitle' => 'Trang danh sách sản phẩm',
            'products' => $products,
        ]);
    }

    public function about() {
        echo 'Home about';
    }

    public function show() {
        $product = $this->productModel->getById(1);

        echo '<pre>';
        print_r($product);
    }
}
