<?php
include('includes\config.php');
$pid=$_GET['pid'];
$cid=$_GET['cid'];
$sql="SELECT * FROM product WHERE p_id='$pid'";
$run=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($run);
$pname=$row['p_name'];


?>
<html>
<body>
  <head>
     <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  </head>

<!-- Modal HTML -->

      <form action="" method="post">
        
        <div class="modal-body">        
               <div class="form-group">
      <label for="uname">User_Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter User_Name:" name="uname" required>
      
    </div>
    <label for="uname">Phone_Number:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone_Number:" name=phone required>
      
    </div>
                 <label for="exampleFormControlTextarea1">Address:</label>
     <textarea  class="form-control" placeholder="Enter Address:" name="address" id="exampleFormControlTextarea1" rows="5">  </textarea>  
    
      </form>

      <a href="javascript:void(0)" onclick="start()"><input type="submit" value="submit" name="order"></a>
      

     

<?php
if(isset($_POST['order'])){
$uname=$_POST['uname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql="INSERT INTO `orders`( `order_quantity`, `order_Product`, `uname`, `phone`, `address`,`c_id`) VALUES ('1','$pname','$uname','$phone','$address','$cid')";
$run=mysqli_query($conn,$sql);
if($run==TRUE){
  echo "<script>alert('Order Place Successfully');</script>";
}
}
?>

     

   
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="push.min.js"></script>

  <script src="serviceWorker.min.js"></script>
        
     <script>
  function start(){
Push.create("Virtual Pharmacy!", {
    body: "Moazzam Abbas",
    icon: '/FYP-Project/PharmacyModule/assets/images/13.png',
    timeout: 4000,
    onClick: function () {
        window.focus();
        this.close();
        window.location.href="https://www.youtube.com/";
    }
});

  }  

 </script>





  





</body>
</html>