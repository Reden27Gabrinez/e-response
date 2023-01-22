





<?php
    include("configuration/config.php");
    include("configuration/firebaseRDB.php");

    $db = new firebaseRDB($databaseURL);

    $id = $_GET['id'];
    $retrieve = $db->retrieve("hotlines/$id");
    $data = json_decode($retrieve, 1);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include("includes/links.php"); ?>
</head>
<!-- https://www.fontawesomecheatsheet.com/font-awesome-cheatsheet-5x/ -->
<body oncontextmenu="return false">

    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    
    </div>
    <!-- loader END -->

    <!-- Main Sidebar Container -->
    <?php include("includes/sidebar.php") ?>

    <main class="main-content">
        <!-- Navbar -->
        <?php include("includes/header.php"); ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
            <div class="conatiner-fluid content-inner mt-n5 py-0">
                <main id="view-panel" >
                <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Update Responders</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="new-user-info">
                    <form method="POST" action="edit.php">
                                    <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="fname">Responder:</label>
                                                        <input type="text" value="<?php echo $data['team']?>" class="form-control" id="responder" name="responder" placeholder="Responder">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="lname">Mobile Number:</label>
                                                        <input type="number" value="<?php echo $data['hotLine']?>" class="form-control" id="number" name="number" placeholder="Mobile Number">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="add1">Latitude:</label>
                                                        <input type="text" value="<?php echo $data['lat']?>" class="form-control" id="lat" name="lat" placeholder="Latitude">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label" for="add2">Longitude:</label>
                                                        <input type="text" value="<?php echo $data['lng']?>" class="form-control" id="long" name="long" placeholder="Longitude">
                                                    </div>
                                                </div>
                                                <hr>
                                                <input type="hidden" name="id" value="<?php echo $id?>">
                                                <button type="submit" class="btn btn-primary">Update Responder</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                </main>
            </div>
        <!-- /.content-wrapper -->

        <?php include("includes/settings.php"); ?>
        <?php include("includes/footer.php"); ?>
    </main>

<!-- REQUIRED SCRIPTS -->
  <?php include("includes/scripts.php"); ?>

</bodyv>
</html>
<?php 
    // }
?>