<?php

class Products extends Controller
{

    private $productModel;

    public function __construct()
    {
        if (!isLoggedIn()) {

            redirect('users/login');
        }
        $this->productModel = $this->model('Product');
    }

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // sanitize post array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/upload/' . $_FILES['image']['name']);

            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'description' => $_POST['description'],
                'image' => $_FILES['image']['name']
            ];


            //make sure no errors
            if ($this->productModel->addProduct($data)) {
                redirect('Products/dashboardAdmin');
            } else {
                //load view with errors
                $this->view('product/addProduct', $data);
            }
        } else {
            $data = [
                'name' => '',
                'price' => '',
                'description' => '',
                'image' => '',

            ];
            $this->view('product/addProduct', $data);
        }
    }
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // sanitize post array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            move_uploaded_file($_FILES['image']['tmp_name'], 'images/upload/' . $_FILES['image']['name']);

            $product = $this->productModel->findproductById($id);

            if (empty($_FILES['image']['name'])) {
                $data = [
                    'id' => $product->id,
                    'name' => trim($_POST['name']),
                    'price' => trim($_POST['price']),
                    'description' => trim($_POST['description']),
                    'image' => $product->image,
                    'name_err' => '',
                    'price_err' => '',
                    'description_err' => '',
                    'image_err' => ''
                ];
            } else {
                $data = [
                    'id' => $product->id,
                    'name' => trim($_POST['name']),
                    'price' => trim($_POST['price']),
                    'description' => trim($_POST['description']),
                    'image' => $_FILES['image']['name'],
                    'name_err' => '',
                    'price_err' => '',
                    'description_err' => '',
                    'image_err' => ''
                ];
            }

            //validate form
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter name';
            }
            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter price';
            }
            if (empty($data['description'])) {
                $data['description_err'] = 'Please enter description ';
            }

            //make sure no errors
            if (empty($data['name_err']) && empty($data['price_err']) && empty($data['description_err'])) {
                if ($this->productModel->edit($data)) {
                    redirect('products/dashboardAdmin');
                } else {
                    die('something went wrong');
                }
            } else {
                //load view with errors
                $this->view('product/editProduct', $data);
            }
        } else {
            $product = $this->productModel->findproductById($id);
        }
        $data = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'description' => $product->description,
            'image' => $product->image,
            'name_err' => '',
            'price_err' => '',
            'description_err' => '',
            'image_err' => ''

        ];
        $this->view('product/editProduct', $data);
    }
    public function dashboardAdmin()
    {
        $products = $this->productModel->getProduct();
        //  $productsum=$this->productModel->getProductByStock();
        $data = [
            'products' => $products,
            // 'productsum' =>$productsum,
        ];
        $this->view('pages/dashboard', $data);
    }
    public function delete($id)
    {
        // get response from data if deleted or not return true or false
        if ($this->productModel->delet($id)) {
            redirect('Products/dashboardAdmin');
        } else {
            die('ops');
        }
    }
}
