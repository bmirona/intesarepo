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

<!--content side-->

            <div class="container">


<?php include('modal_seeEvents.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Table of our committees</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Committees</th>
                                    <th style="text-align:center;">Description</th>

                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('../local_connect.php');
								$result = $bdd->prepare("SELECT * FROM commitee ORDER BY idCommitee ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$idCommitee=$row['idCommitee'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['nameCom']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['descriptionCom']; ?></td>


										<!-- Modal -->

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
