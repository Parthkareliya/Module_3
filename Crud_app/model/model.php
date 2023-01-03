<?php
class model
{
    //connection
    public $connection="";
    public function __construct()
    {
        try
        {
            $this->connection=new mysqli("localhost","root","","crudapp");
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->connection));
        }
    }
    // create a member function for insertall data
    public function insalldata($table,$data)
    {
        $k=array_keys($data);
        $kk=implode(",",$k);     
        $v=array_values($data);
        $vv=implode("','",$v);
        $insert="insert into $table($kk) values('$vv')";
        $exe=mysqli_query($this->connection,$insert);
        return $exe;
    }
    // create a member function for showall data
    public function shwalldata($table)
    {
        $select="select * from $table";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
    public function delete_index($id)   
	{
		$this->db->delete('tbl', "`id` = {$id}");
		
	}
}
?>