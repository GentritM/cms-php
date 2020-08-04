<?php include "includes/admin_header.php";?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
<?php include "includes/admin_navigation.php";?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Admin Site 
                            <small>Author</small>
                        </h1>
			

		<div class="col-xs-6">

	<?php insert_categories();?>
			<!-- ADD FORM -->
			<form action="" method="POST">
			 <div class="form-group">
				<label for="cat-title">Add Category</label>
				<input class="form-control" type="text" name="cat_title">
			 </div>
			
			 <div class="form-group">
				<input class="btn btn-primary" type="submit" name="submit" value="Add Category">
			 </div>	
			 
			</form>	


	 <?php 

		if(isset($_GET['edit'])){

		$cat_id = $_GET['edit'];

		include "includes/update_categories.php"; 

	}

	?> 

			
</div>
		<div class="col-xs-6">
			
			<table class="table table-bordered">   
			    <thead>
				<tr>
					<th>Id</th>
					<th>Category Title</th>
				</tr>
			   	<tbody>


				   <?php findAllCategories(); ?> 
					
					
					
					 <?php DeleteCategories(); ?>
				</tbody>
			    </thead>
			</table>
			
		</div>
				
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php";?>
