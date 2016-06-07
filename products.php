<?php
  include_once 'products_crud.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>My Bike Ordering System : Products</title>
  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

  <?php include_once 'nav_bar.php'; ?>
  <div class="container-fluid">
    <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Create New Product</h2>
      </div>

    <form action="products.php" method="post" class="form-horizontal">
      <div class="form-group">
        <label for="productid" class="col-sm-3 control-label">ID</label>
        <div class="col-sm-9">
          <input name="pid" type="text" readonly class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_num']; ?>">
        </div>
      </div>

      <div class="form-group">
          <label for="productname" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-9">
            <input name="name" type="text" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>"required>
          </div>
      </div>

      <div class="form-group">
          <label for="productprice" class="col-sm-3 control-label">Price</label>
          <div class="col-sm-9">
            <input name="price" type="text" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>" required>
          </div>
      </div>

      <div class="form-group">
          <label for="productbrand" class="col-sm-3 control-label">Brand</label>
          <div class="col-sm-9">
            <select name="brand" class="form-control" required>
              <option value="Adidas" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Adidas") echo "selected"; ?>>Adidas</option>
              <option value="Indiana Jones" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Indiana Jones") echo "selected"; ?>>Indiana Jones</option>
              <option value="Dickies" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Dickies") echo "selected"; ?>>Dickies</option>
              <option value="Nike" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Nike") echo "selected"; ?>>Nike</option>
              <option value="Columbia" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Columbia") echo "selected"; ?>>Columbia</option>
              <option value="The North Face" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="The North Face") echo "selected"; ?>>The North Face</option>
              <option value="Fox" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Fox") echo "selected"; ?>>Fox</option>
              <option value="Simplicity" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Simplicity") echo "selected"; ?>>Simplicity</option>
              <option value="Coal" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Coal") echo "selected"; ?>>Coal</option>
              <option value="Billabong" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Billabong") echo "selected"; ?>>Billabong</option>
            </select>
        </div>
      </div>

      <div class="form-group">
          <label for="producttype" class="col-sm-3 control-label">Type</label>
          <div class="col-sm-9">
            <select name="type" class="form-control" required>
              <option value="Baseball Caps" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Baseball Caps") echo "selected"; ?>>Baseball Caps</option>
              <option value="Newsboy Caps" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Newsboy Caps") echo "selected"; ?>>Newsboy Caps</option>
              <option value="Beanies" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Beanies") echo "selected"; ?>>Beanies</option>
              <option value="Cowboy Hats" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Cowboy Hats") echo "selected"; ?>>Cowboy Hats</option>
              <option value="Visors" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Visors") echo "selected"; ?>>Visors</option>
            </select>
          </div>
      </div>

      <div class="form-group">
          <label for="productcolor" class="col-sm-3 control-label">Color</label>
          <div class="col-sm-9">
            <input type="color" name="color" class="form-control" value=" <?php if(isset($_GET['edit'])) echo $editrow['fld_product_color']; ?> " required>
          </div>
      </div>

      <div class="form-group">
          <label for="productdescription" class="col-sm-3 control-label">Description</label>
          <div class="col-sm-9">
            <input type="text" name="description" class="form-control" value=" <?php if(isset($_GET['edit'])) echo $editrow['fld_product_description']; ?>" required>
          </div>
      </div>

      <div class="form-group">
          <label for="productquantity" class="col-sm-3 control-label">Quantity</label>
          <div class="col-sm-9">
            <input name="quantity" type="text" class="form-control" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_quantity']; ?>" required>
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <?php if (isset($_GET['edit'])) { ?>
            <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_num']; ?>">
            <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
            <?php } else { ?>
            <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
            <?php } ?>
            <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
          </div>
      </div>
    </form>
    </div>
  </div>

  <div class="row">
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <div class="page-header">
      <h2>Products List</h2>
    </div>
    <table class="table table-striped table-bordered">
      <tr>
        <th>Product ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Brand</th>
        <th></th>
      </tr>
      <?php
      // Read
      $per_page = 10; //show maximum product can be shown in a page
     if (isset($_GET["page"]))
       $page = $_GET["page"];
     else
       $page = 1;
     $start_from = ($page-1) * $per_page;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("select * from tbl_products_a150547_pt2 LIMIT $start_from, $per_page");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>
      <tr>
        <td><?php echo $readrow['fld_product_num']; ?></td>
        <td><?php echo $readrow['fld_product_name']; ?></td>
        <td><?php echo $readrow['fld_product_price']; ?></td>
        <td><?php echo $readrow['fld_product_brand']; ?></td>
        <td>
          <a href="products_details.php?pid=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-warning btn-xs" role="button">Details</a>
          <a href="products.php?edit=<?php echo $readrow['fld_product_num']; ?>" class="btn btn-success btn-xs" role="button"> Edit </a>
          <a href="products.php?delete=<?php echo $readrow['fld_product_num']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>

    </table>
    </div>
    </div>

    <div class="row">
     <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
       <nav>
           <ul class="pagination">
           <?php
           try {
             $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $stmt = $conn->prepare("SELECT * FROM tbl_products_a150547_pt2");
             $stmt->execute();
             $result = $stmt->fetchAll();
             $total_records = count($result);
           }
           catch(PDOException $e){
                 echo "Error: " . $e->getMessage();
           }
           $total_pages = ceil($total_records / $per_page);
           ?>
           <?php if ($page==1) { ?>
             <li class="disabled"><span aria-hidden="true">«</span></li>
           <?php } else { ?>
             <li><a href="products.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
           <?php }
           for ($i=1; $i<=$total_pages; $i++)
             if ($i == $page)
               echo "<li class=\"active\"><a href=\"products.php?page=$i\">$i</a></li>";
             else
               echo "<li><a href=\"products.php?page=$i\">$i</a></li>";

           ?>
           <?php if ($page==$total_pages) { ?>
             <li class="disabled"><span aria-hidden="true">»</span></li>
           <?php } else { ?>
             <li><a href="products.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
           <?php } ?>
         </ul>
       </nav>
     </div>
   </div>
  </div> <!--end of container fluid-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
