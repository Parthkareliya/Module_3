<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent:: __construct();
        if(isset($_POST["addprod"]))
        {
            $tmp_name=$_FILES["pimage"]["tmp_name"];
            $path="img/products/".$_FILES["pimage"]["name"];
            move_uploaded_file($tmp_name,$path);
            $pnm=$_POST["pname"];
            $price=$_POST["price"];
            $cat=$_POST["category"];
            $data=array("pimg"=>$path,"pname"=>$pnm,"price"=>$price,"category"=>$cat);
            $chk=$this->insalldata('tbl',$data);
            if($chk)
            {
                echo "<script>
                alert('Products addedd successfuly')
                window.location='./';
                </script>";

            }
        }   
        $shwprod=$this->shwalldata('tbl'); 
        function delete_index($id) 
	{
		
		$this->model->delete_index($id);
		echo "<script>
                alert('Products deleted successfuly')
                window.location='./';
                </script>";
	}
    // load your template here
    if(isset($_SERVER["PATH_INFO"]))
    {
        switch($_SERVER["PATH_INFO"])
        {
            case '/':
                require_once("index.php");
                require_once("showproduct.php");
                require_once("footer.php");
                break;

            default: 
            require_once("index.php");
            require_once("404.php");
            require_once("footer.php");
            break;

        }
    }
   
}
}
$obj = new controller;
?>