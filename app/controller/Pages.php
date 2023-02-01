<?php
class Pages extends Controller
{
  private $productModel;
  public function __construct()
  {
    $this->productModel = $this->model('Product');
  }

  public function index()
  {
    $products= $this->productModel->getProduct();
    $data = [
      'products' => $products 
    ];
    $this->view('pages/index', $data);
  }
  public function ContactUs()
  {
    $products= $this->productModel->getProduct();
    $data = [
      'products' => $products 
    ];
    $this->view('pages/ContactUs', $data);
  }
  public function Blog()
  {
    $products= $this->productModel->getProduct();
    $data = [
      'products' => $products 
    ];
    $this->view('pages/Blog', $data);
  }
  public function NewArrival()
  {
    $products= $this->productModel->getProduct();
    $data = [
      'products' => $products 
    ];
    $this->view('pages/NewArrival', $data);
  }
  public function Features()
  {
    $products= $this->productModel->getProduct();
    $data = [
      'products' => $products 
    ];
    $this->view('pages/Features', $data);
  }
  
}
