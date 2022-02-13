<?php


namespace App\classes;


class Product
{
    protected $file;
    protected $directory;
    protected $products;
    protected $product;
    protected $name;
    protected $price;
    protected $decription;
    protected $imageName;
    protected $tmpPath;


    public function __construct($post=null,$file = null)
    {
//        echo "<pre>";
//        print_r($post);
//        print_r($file);
//        echo $file['image']['name'];
//        echo $file['image']['full_path'];
//        echo $file['image']['type'];
//        echo $file['image']['tmp_name'];

        $this->file         = $file;
        $this->imageName    = $file['image']['name'];
        $this->tmpPath      = $file['image']['tmp_name'];
        $this->directory    = 'assets/img/product-image/'.$this->imageName;


    }

    public function index(){
        header('Location: action.php?pages=add-product');
    }

    public function newProduct(){
        move_uploaded_file($this->tmpPath,$this->directory);
    }
}