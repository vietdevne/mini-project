<?php  foreach($dbh->query("SELECT * from product where product_id = $id") as $row) { ?>
<form action="?act=edit" enctype="multipart/form-data" method="POST">
<input type="hidden" name="product_id" value="<?=$row['product_id']?>">
    <div class="form-group">
        <label for="">Product Name:</label>
        <input type="text" class="form-control" name="Eproduct_name" value="<?=$row['product_name']?>">
    </div>
    <div class="form-group">
        <label for="">Product Price:</label>
        <input type="text" class="form-control" name="Eproduct_price" value="<?=$row['product_price']?>">
    </div>
    <div class="form-group">
        <label for="">Product Image:</label>
        <input type="file" class="form-control" name="Eproduct_image" value="<?=$row['product_image']?>">
    </div>
    <button name="edit" type="submit" class="btn btn-success">EDIT</button>
</form>
<?php 
}
?>