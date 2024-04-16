<?php include ("layout/header.php"); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Services</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">Service</li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
    
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Services</h5>

              <!-- Vertical Form -->
              <form method="Post" action="Bcode/service.php" enctype="multipart/form-data" class="row g-3">
              <div class="col-6">
              <label for="service">Add service</label>

              <select name="Service" id="Service" class="form-control">
                <option value="select">Select service</option>
                <option value="Transportors">Transportors</option>
                <option value="Labourers">Labourers</option>
                <option value="Cleaners">Cleaners</option>
                <option value="Cook">Cook</option>
                <option value="Plumber">Plumber</option>
                <option value="Electrician">Electrician</option>
              </select>
                  
                </div>
                <div class="col-6">
                  <label for="inputName4" class="form-label">Service Provider Name</label>
                  <input type="text" name="service_provider_name" class="form-control"  placeholder="Enter service provider name:">
                </div>
                <div class="col-6">
                  <label for="inputLocality4" class="form-label">Locality/Address</label>
                  <input type="text"  name="locality" class="form-control"   placeholder="Enter address">
                </div>
                <div class="col-6">
                  <label for="inputPhone4" class="form-label">Phone No</label>
                  <input type="number" name="phone_no" class="form-control" placeholder="Enter contact number" >
                </div>
                <div class="col-6">
                <label for="city">City</label>

                <select name="city" id="city" class="form-control">
                  <option value="select">Select city</option>
                  <option value="Nashik">Nashik</option>
                  <option value="Kolkatta">Kolkatta</option>
                  <option value="Thane">Thane</option>
                  <option value="Solapur">Solapur</option>
                  <option value="Mumbai">Mumbai</option>
                  <option value="Pune">Pune</option>
                </select>
                  
                </div>
                <div class="col-6">
                  <label for="inputDesc4" class="form-label">Description</label>
                  <input type="text"  name="description" class="form-control"  placeholder="Enter description">
                </div>
                <div class="col-6">
                <label for="city">Rating</label>

                <select name="rating" id="rating" class="form-control">
                <option value="select">Rate the service</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                 
                </select>
                  
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="add_services">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

      

        </div>
      </div>
    </section>

  </main><!-- End #main -->
<?php include ("layout/footer.php"); ?>