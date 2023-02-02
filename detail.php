<?php include_once('connect.php'); ?>
<?php include_once('topbar.php'); ?>
<?php
    // collect details of the product
    $product_id = $_GET['id'];
    $sql = "SELECT pro.*, cat.name as cat_name from products pro left join categories cat on pro.category_id = cat.id  where pro.id='$product_id' ";
    $details_q = mysqli_query($con, $sql);
    $details = mysqli_fetch_array($details_q);

    // print_r($details); die;

   
?>
<!-- Details -->
<section id="prodetails" class="section-p1 my-4">
<div class="pro-image my-5">
        <img src="<?php echo './dashboard/uploads/'.$details['image'] ?>" width="100%"  class="img-fluid mt-5 px-2" id="" alt="<?php echo $details['tags'] ?>">

        <!-- <div class="small-img-group">
            <div class="small-img-col">
                <img src="images/sweat.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/sweat.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/sweat.jpg" width="100%" class="small-img" alt="">
            </div>
            <div class="small-img-col">
                <img src="images/sweat.jpg" width="100%" class="small-img" alt="">
            </div>
        </div> -->
    </div>

    <div class="pro-detail" style="background-color: ;margin-top: 24px;">
        <h6>Home / <?php echo $details['cat_name'] ?></h6>
        <div id="cart_msg" style="font-weight:bold;color:green"></div>
        <div style="display: flex;justify-content: space-between;width: 100%;background-color: ;align-items: center;">
        
            <span style="display: flex;">
                <h4 class="text-capitalize"><?php echo $details['name'] ?></h4>
            </span>
            <span style="display: flex;">
                <button role="button" data-product-id="<?php echo rand(1, 12); ?>" style="padding:4px;" id="add_to_cart" >cart <span id="count_cart" style="padding:2px 6px;background-color:white;color:olive;border-radius:8px;"></span></button>
                
            </span>
        </div>
        <h2>NRs. <?php echo $details['price'] ?> /-</h2>
        <!-- <select>
            <option>Choose</option>
            <option>Buy</option>
            <option>Rent</option>
        </select> -->
        <a href="order.php?id=<?php echo $details['id'] ?>">
            <button class="button1 btn btn-sm">
            Buy Now
            </button>
        </a>
        <a href="rent.php?id=<?php echo $details['id'] ?>">
            <button class="button1 btn btn-sm">
                Rent Now
            </button>
        </a>
        <h4>Product Details</h4>
        <span>
            <?php echo $details['details'] ?>
        </span>
        <br>
        <?php
        //if user is logged in comment on product
        if(empty($_SESSION['user_id'])){

        }
        else{
            ?>
            <form action="">
           <div class="form-group d-inline-flex">
                <img src="./images/user.jpg" alt="" class="mx-1" style="height:40px;width:40px;border-radius:50%;border:2px solid white; outline:2px solid silver">
                <input class="form-control col-9" name="comment" type="text" placeholder="Comment...">
                <button>Comment</button>
           </div>
        </form><?php
        }
        ?>

        <details class="mt-3">
            <summary><b>View Comments</b></summary>

            <!-- comments list -->
            <div class="form-group mt-2 d-flex justify-content-between">
               <span class="col-9 d-inline-flex ">
                <img src="./images/user.jpg" alt="" class="mx-1" style="height:40px;width:40px;border-radius:50%;border:2px solid white; outline:2px solid silver">
                    <div class="border-0 d-flex align-items-center px-2">some comments </div>
               </span>
               <span class="col-3 d-flex align-items-center">
                <i><span class="text-muted">2 days ago</span></i>
               </span>
           </div>
        </details>
    </div>
    
</section>

<!-- Related Products -->
<section id="product1" class="sec-p1">
    <h2>Related Products</h2>
    <div class="pro-container">
    <div class="pro">
        <img src="images/hood.jpg" alt="">
        <div class="des">
            <h5>T-shirts</h5>
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                </div>
                <h4>Rs. 450</h4>
            </div>
            <a href="#"><i class="fa-light fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
            <img src="images/hood.jpg" alt="">
            <div class="des">
                <h5>T-shirts</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h4>Rs. 450</h4>
            </div>
            <a href="#"><i class="fa-light fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
            <img src="images/hood.jpg" alt="">
            <div class="des">
                <h5>T-shirts</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h4>Rs. 450</h4>
            </div>
            <a href="#"><i class="fa-light fa-cart-shopping cart"></i></a>
        </div>
        <div class="pro">
            <img src="images/hood.jpg" alt="">
            <div class="des">
                <h5>T-shirts</h5>
                <div class="star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <h4>Rs. 450</h4>
            </div>
            <a href="#"><i class="fa-light fa-cart-shopping cart"></i></a>
        </div>
    </div>
</section>
  <!-- Footer -->
<?php include_once('foot.php') ?>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");
        smallimg[0].onclick=function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick=function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick=function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[2].onclick=function(){
            MainImg.src = smallimg[3].src;
        }
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script>
    // normal users cart
    var counter = document.getElementById('count_cart')
    let cartLocal = localStorage.getItem('thrift_cart');
    let checkCart = cartLocal ? JSON.parse(cartLocal) : [];
    
    totalCart()

    window.addEventListener('load', function(){
        var product = document.getElementById('add_to_cart');
        product.addEventListener('click', function(event){
            // event.preventDefault()

            // get product id
            let cart_id = this.getAttribute('data-product-id');
            checkCart.push(cart_id)
            
            localStorage.setItem('thrift_cart', JSON.stringify(checkCart));

            // show cart added message
            document.getElementById('cart_msg').innerHTML = "Item is added to cart";
            totalCart()
            
        });

        

    });
    
function totalCart(){
    total_cart = checkCart.length;

    // add cart counter
    counter.innerHTML = total_cart;
}
  </script>
  </body>
</html>