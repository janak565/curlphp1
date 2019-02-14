<?php
// include database and object files
include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// pass connection to objects
$product = new Product($db);
$category = new Category($db);

// set page headers
$page_title = "Create Product";
include_once "layout_header.php";
 
echo "<div class='right-button-margin'>";
    echo "<a href='listproduct.php' class='btn btn-default pull-right'>Products List</a>";
echo "</div>";
 
?>
<!-- PHP post code will be here -->
<?php 
// if the form was submitted - PHP OOP CRUD Tutorial
if(isset($_POST) && !empty($_POST)){
 
    // set product property values
    $product->name = $_POST['name'];
    $product->price = $_POST['price'];
    $product->description = $_POST['description'];
    $product->category_id = $_POST['category_id'];
    $image=!empty($_FILES["image"]["name"])
        ? sha1_file($_FILES['image']['tmp_name']) . "-" . basename($_FILES["image"]["name"]) : "";
    $product->image = $image;
        
    $imagecheck =  $product->uploadPhoto();    
    
    if(empty($imagecheck)){
        // create the product
        if($product->create()){
            echo "<div class='alert alert-success'>Product was created.</div>";
        }
     
        // if unable to create the product, tell the user
        else{
            echo "<div class='alert alert-danger'>Unable to create product.</div>";
        }
    }else{
        echo $imagecheck;
    }
}

?>

<!-- HTML form for creating a product -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" name="add_product" id="add_product">
 
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' id="name" class='form-control' /></td>
            
        </tr>
 
        <tr>
            <td>Price</td>
            <td><input type='text' name='price' id="price" class='form-control' /></td>
        </tr>
 
        <tr>
            <td>Description</td>
            <td><textarea name='description' id="description" class='form-control'></textarea></td>
        </tr>
 
        <tr>
            <td>Category</td>
            <td>
            <?php
            //echo $category->categoryTree();
				// read the product categories from the database
				$stmt = $category->read();
				 
				// put them in a select drop-down
				echo "<select class='form-control' name='category_id' id='category_id'>";
				     echo "<option value=''>Select category...</option>";
				 
				    // while ($row_category = $stmt->fetch(PDO::FETCH_ASSOC)){
				    //     extract($row_category);
				    //     echo "<option value='{$id}'>{$name}</option>";
				    // }
				    echo $category->categoryTree();
				echo "</select>";
				?>
            </td>
        </tr>
        <tr>
            <td>Photo</td>
            <td><input type="file" name="image" id="image" /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>
 
    </table>
</form>
<?php
 // footer
include_once "layout_footer.php";
?>