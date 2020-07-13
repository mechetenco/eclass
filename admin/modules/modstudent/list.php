<?php
		check_message(); 
		?> 
<style type="text/css">
	#example {
		
		
	}
	
</style>
  <div class="row">
      <div class="col-lg-12"> 
            <h1 class="page-header">List of Student <small>|  <label class="label label-xs" style="font-size: 12px"><a href="index.php?view=add">  <i class="fa fa-plus-circle fw-fa"></i> New</a></label> |</small></h1> 
       		 
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
			    <form action="controller.php?action=delete" Method="POST">
					<div style="overflow-x:auto;">  					
				<table id="example"  class="table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px" >
					
				  <thead>
				  	<tr> 
				  		<th>S/N</th> 
				  		  <th>Name</th>
				  		  <th>Username</th> 
						  <th>Address</th> 
						  <th>gender</th>
						  <th>Birth_date</th>
						  <th>Phone</th>
						  <th>School</th>
						  <th>Email</th> 
						 
				  		 
				  	</tr>	
				  </thead> 	

			  <tbody>
				  	<?php 
				  		$query = "SELECT * FROM `tblstudent`";
				  		$mydb->setQuery($query);
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>'; 
				  		echo '<td width="5%" align="center"></td>'; 
						  echo '<td>'. $result->name.'</td>'; 
						  echo '<td>'.$result->username. '</td>'; 
						  echo '<td>'.$result->address. '</td>'; 
						  echo '<td>'.$result->gender. '</td>'; 
						  echo '<td>'.$result->birth_date. '</td>'; 
						  echo '<td>'.$result->phone. '</td>'; 
						  echo '<td>'.$result->school. '</td>'; 
				  		echo '<td>'. $result->email.'</td>'; 

				  		 
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				 	
				</table>
					</div>
				<div class="btn-group">
				<!--   <a href="index.php?view=add" class="btn btn-default">New</a> -->
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
				</form> 