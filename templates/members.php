<!DOCTYPE html>
<html>
<?php include('headerB.php'); ?>
<body>
  <nav role="navigation">
   <ul class="nav nav-tabs nav-right">
    <li role="presentation" class="active"><a href="#">Events Page</a></li>
    <li role="presentation"><a href="../templates/accueil.php">Go back</a></li>
    <li role="presentation"><a href="../controllers/signout.php">Log out</a></li>
  </ul>
  </nav>
    <div class="row-fluid">
        <div class="span12">




            <div class="container">


  <?php include('modal_members.php'); ?>

                          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                              <div class="alert alert-info">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong><i class="icon-user icon-large"></i>&nbsp;List of members </strong>
                              </div>
                              <thead>
                                  <tr>
                                      <th style="text-align:center;">First name</th>
                                      <th style="text-align:center;">Last name</th>
                                      <th style="text-align:center;">Pseudo</th>
                                      <th style="text-align:center;"> Email</th>
                                      <th style="text-align:center;"> Committee</th>
                                  </tr>
                              </thead>
                              <tbody>
                            <?php
                                require_once('../local_connect.php');
                                $result = $bdd->prepare("SELECT * FROM utilisateur ORDER BY idUser ASC");
                                $result->execute();
                                for($i=0; $row = $result->fetch(); $i++){
                                $idUser=$row['idUser'];
                            ?>
                                <tr>
                                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['firstName']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['lastName']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['pseudo']; ?></td>
                  <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['email']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['commitee']; ?></td>
                              </div>
                              </tr>
                              <?php } ?>
                                          </tbody>
                                      </table>



                          </div>
                          </div>
                          </div>
                          </div>


                          </body>
                          </html>
