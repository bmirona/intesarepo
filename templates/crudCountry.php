<?php include('headerB.php'); ?>
<body>
  <nav role="navigation">
   <ul class="nav nav-tabs nav-right">
    <li role="presentation" class="active"><a href="#">Editing page</a></li>
    <li role="presentation"><a href="../templates/admin.php">Admin Page</a></li>
    <li role="presentation"><a href="../controllers/signout.php">Log out</a></li>
  </ul>
  </nav>
    <div class="row-fluid">
        <div class="span12">




            <div class="container">


<?php include('modal_add.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Name</th>
                                    <th style="text-align:center;">Description</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('../local_connect.php');
								$result = $bdd->prepare("SELECT * FROM country ORDER BY idCountry ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$idCountry=$row['idCountry'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['nameC']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['descriptionC']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="editCountry.php<?php echo '?idCountry='.$idCountry; ?>" class="btn btn-info">Edit</a>
									 <a href="#delete<?php echo $idCountry;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
								</td>

										<!-- Modal -->
								<div id="delete<?php  echo $idCountry;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div style="font-size:larger;" class="alert alert-danger">Are you Sure you want Delete <b style="color:red;"><?php echo $row['nameC']." ".$row['descriptionC'] ; ?></b> Data?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="../controllers/c_deleteCountry.php<?php echo '?idCountry='.$idCountry; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
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
