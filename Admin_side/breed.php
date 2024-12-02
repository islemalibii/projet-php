<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breeds</title>
    <link rel="stylesheet" href="ejawhalyan.css">
</head>
<body>
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main" id="sidenav-main">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0"  target="_blank">
            <span class="ms-1 font-weight-bold text-white"> Navigate </span>
          </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white " href="adminsHome.php">
                <span class="nav-link-text ms-1">Users</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white active bg-gradient-primary " href="breed.php">
                <span class="nav-link-text ms-1">Breeds</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="cat.php">
                <span class="nav-link-text ms-1">Cats</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="vet.php">

                <span class="nav-link-text ms-1">Vets</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="adoption.php">

                <span class="nav-link-text ms-1">Adoptions</span>
              </a>
            </li>

          </ul>
        </div>
      </aside>






      <center>
        <div class="container-fluid py-5">
          <div class="row">
            <div class="col-11" >
                <div class="card my-4">
  
                  <!--lkhat lmlawen  !!!!!!! -->
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                      <h6 class="text-white text-capitalize ps-3">Breeds <a href='addBreed.html' class="ps-3"><button type='submit'>Add</button></a>

                      </h6> 
                    </div>
                  </div>
  
                  <div class="card-body px-9 pb-5">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-2">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Breed ID</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0">Breed name</th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-wopacity-7">Edit</eight-bolder th>
                              <th class="text-center text-uppercase text-secondary text-xxs font-wopacity-7">Remove</eight-bolder th>
                              <th class="text-secondary opacity-7"></th>
                            </tr>
                            <tr>
                            <?php
                                require_once('../models/breed.php');
                                require_once('../controllers/breedController.php');

                                $bCtrl = new breedController();
                                $b = $bCtrl->listRace();

                                if ($b) {
                                    foreach ($b as $breed) {
                                        echo "<tr>";
                                        echo "<td>{$breed['idrace']}</td>";
                                        echo "<td>{$breed['namerace']}</td>";
                                        echo "<td class='ps-8'><a href='modifyBreed.php?id={$breed['idrace']}'>
                                        <button type='button'>Edit</button>
                                        </a></td>";
                                        echo "<td class='ps-8'><a href='deleteBreed.php?id={$breed['idrace']}'>
                                        <button type='button'>Delete</button>
                                        </a></td>";
                                        
                                        echo "</tr>";
                                    }
                                }
                                ?>
                            </tr>
                          </thead>
                          
                        </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </center>
</body>
</html>