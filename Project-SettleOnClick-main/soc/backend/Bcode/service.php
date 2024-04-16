<?php

include("conn.php");

if(isset($_POST["add_services"]))
{
    
    $Service=$_POST["Service"];
    $service_provider_name=$_POST["service_provider_name"];
    $locality=$_POST["locality"];
    $phone_no=$_POST["phone_no"];
    $city=$_POST["city"];
    $description=$_POST["description"];
    $rating=$_POST["rating"];
    

    $query="INSERT INTO `services`( `Service`, `service_provider_name`, `locality`, `phone_no`, `city`,`description`,`rating`) VALUES ('$Service','$service_provider_name','$locality','$phone_no','$city','$description','$rating')";

    $result=mysqli_query($conn,$query);
    header("location:../view_services.php");

}
?>