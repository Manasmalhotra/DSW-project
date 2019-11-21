<?php


class CreateDb
{
   public $servername;
   public $username;
   public $password;
   public $dbname;
   public $tablename;
   public $con;

   //class constructor
    public function __construct(
        $dbname="Newdb",
        $tablename="productdb",
        $servername="localhost",
        $username="root",
        $password=""
)
{
     $this->dbname=$dbname;
     $this->tablename=$tablename;
     $this->servername=$servername;
     $this->username=$username;
     $this->password=$password;

     //create connection
    $this->con=mysqli_connect($servername,$username,$password);
    if(!$this->con)
    {
       die("connection failed:". mysqli_connect_error());
    }

    $sql="CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($this->con,$sql)){
        $this->con=mysqli_connect($servername,$username,$password,$dbname);

        //create table
        $sql="CREATE TABLE if not exists $tablename
        (id int(11) not null auto_increment primary key,
         product_name varchar(25) not null,
         product_price float,
         product_image varchar(100),
         description varchar(100) ,
         quantity int(11) ,
         link varchar(20)                           
                                        
         );";



      if(!mysqli_query($this->con,$sql))
      {
          echo"error creating table:" .mysqli_error($this->con);
      }
    }
    else{
        return false;
    }

}
   //get product from the database
    public function getdata(){
        $sql="select*from $this->tablename";
        $result=mysqli_query($this->con,$sql);
        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }
}
?>
