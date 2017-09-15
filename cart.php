<?php
class cart {
    public $srno;
    public $productid;
    public $product_name;
    public $photo;
    public $price;
    public $qty;
    public function __construct($_srno,$productid,$product_name,$_cover_photo,$_price,$_qty)
    {
        $this->srno=$_srno;
      $this->productid=$productid;
        $this->product_name=$product_name;
        $this->photo=$_cover_photo;
        $this->price=$_price;
        $this->qty=$_qty;



    }
    public function get_qty()   // get qty of current object
    {
        return $this->qty;
    }
    public function set_qty($qty)  //set qty of current object
    {
        $this->qty = $qty;
    }
    public function get_pro_id()  // get productid of current object
    {
        return $this->productid;
    }
}