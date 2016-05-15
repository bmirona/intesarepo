<?php
include ('headerB.php');
$ID=$_GET['idCountry'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
include('../local_connect.php');
$result = $bdd->prepare("SELECT * FROM country where idCountry='$ID'");
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$idCountry=$row['idCountry'];
?>
<form class="form-horizontal" method="post" action="../controllers/c_editCountry.php<?php echo '?idCountry='.$idCountry; ?>"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Personal Information</h4>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Name:</label>
                                    <div class="controls">
                                        <input type="text" name="nameC" required value=<?php echo $row['nameC']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description:</label>
                                    <div class="controls">
                                        <input type="text" name="descriptionC" required value=<?php echo $row['descriptionC']; ?>>
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
                                        <a href="crudCountry.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
<?php } ?>
                                </center>
                                </center>

                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
</body>
</html>
