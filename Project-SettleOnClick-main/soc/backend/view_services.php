<?php include ("layout/header.php");
include ("Bcode/conn.php");
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>View Services</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Services</li>
          <li class="breadcrumb-item active">View</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <h5 class="card-title"></h5>
            <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Service</th>
                    <th>Service Provider Name</th>
                    <th>Company Name</th>
                    <th>Locality</th>
                    <th>Phone No.</th>
                    <th>City</th>
                    <th>Description</th>
                    <th>Rating</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $query="SELECT * FROM `services` ";
                        $result=mysqli_query($conn,$query);
                        $count=1;
                        while($service_info=mysqli_fetch_array($result)){
                    ?>
                  <tr>
                    <td><?php echo $count;?></td>
                    <td><?php  echo $service_info['Service']; ?></td>
                    <td><?php echo $service_info['service_provider_name'];?></td>
                    <td><?php echo $service_info['locality'];?></td>
                    <td><?php echo $service_info['phone_no'];?></td>
                    <td><?php echo $service_info['city'];?></td>
                    <td><?php echo $service_info['description'];?></td>
                    <td><?php echo $service_info['rating'];?></td>
                    
                    
                    <td>
                      <a href="edit_products.php?id=<?php echo $product_info['id'];?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="delete.php?id=<?php echo $service_info['id'];?>"  onclick="return confirm('Are you sure you want to delete this Product?')"><i class="bi bi-trash"></i></a>
                    </td> 
                </tr>

                <?php $count++; } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?php include ("layout/footer.php"); ?>