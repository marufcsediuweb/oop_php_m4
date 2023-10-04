<?php
class Product
{
    private $id;
    private $name;
    private $price;
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    private function getFormattedPrice()
    {
        $formattedPrice = number_format($this->price, 2);
        return $formattedPrice;
    }
    public function showDetails()
    {
        $displayText = "Product Details:\n- ID: {$this->id}\n- Name: {$this->name} \n- Price: {$this->getFormattedPrice()}\n";

        echo $displayText;

    }


}


$product = new Product(1, "T-shirt", 19.99);
$product->showDetails();

// For testing purpose
// $product2 = new Product(2, "Pant", 29);
// $product2->showDetails();

?>