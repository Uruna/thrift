<?php 
include_once('../connect.php');

//for parent category
$sel_category = "SELECT * from categories where parent_id=0 ";
$parent = mysqli_query($con, $sel_category);

//for all categories
$all_category = "SELECT * from categories";
$category = mysqli_query($con, $all_category);

?>
<?php include('top.php'); ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="create_product.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="catname">Title</label>
                    <input type="text" name="name" class="form-control" id="catname" placeholder="Product name">
                  </div>
                  <div class="form-group">
                    <select class="form-select text-capitalize" name="category" id="">
                        <option value=""> --Select Category -- </option>
                        <?php
                        foreach($parent as $cat){
                            ?>
                            <option value="<?php echo $cat['id']; ?> "><?php echo $cat['name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-select text-capitalize" name="size" id="">
                        <option value=""> --Select Size -- </option>
                        <option value="xs">X-small</option>
                        <option value="sm">Small</option>
                        <option value="md">Medium</option>
                        <option value="lg">Large</option>
                        <option value="xl">X-large</option>
                        <option value="xxl">XX-large</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-select text-capitalize" name="group" id="">
                        <option value=""> --Age Group -- </option>
                        <option value="kid">Kids</option>
                        <option value="teen">Teen</option>
                        <option value="adult">Adult</option>
                        <option value="aged">aged</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="color">Color</label>
                    <input type="text" name="color" class="form-control" id="color" placeholder="Category name">
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="price in NRS">
                  </div>
                  <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" class="form-control" id="tags" placeholder="Category tags seperated by comma">
                  </div>
                  <div class="form-group">
                    <label for="tags">Details</label> <br>
                   <textarea name="details" id="details" class="w-100" rows="10" placeholder="details of the product"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image">
                  </div>
                </div>
                <!-- /.card-body -->
               
               
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
            <div class="col-md-6">
                <div class="">
                    <h3 class="bg-success text-light w-100 p-2">Add Category</h3>
                </div>
                    <table class="table table-striped w-100 text-capitalize">
                        <thead>
                            <tr>
                                <th>sn</th>
                                <th>name</th>
                                <th>has parent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($category as $key => $item){
                                ?>
                                    <tr>
                                        <td><?php echo $key+1; ?></td>
                                        <td><?php echo $item['name']; ?></td>
                                        <td><?php 
                                        if($item['parent_id'] == 0 ){
                                                echo 'main'; 
                                            }
                                            else{
                                                echo 'sub';
                                            }
                                        ?></td>
                                    </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
            <!-- /.card -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  

  <?php include('foot.php'); ?>