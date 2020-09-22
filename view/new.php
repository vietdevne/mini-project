<form action="?act=add" enctype="multipart/form-data" method="POST">
    <div class="form-group">
        <label for="">Product Name:</label>
        <input type="text" class="form-control" name="product_name">
    </div>
    <div class="form-group">
        <label for="">Product Price:</label>
        <input type="text" class="form-control" name="product_price">
    </div>
    <div class="form-group">
        <label for="">Product Image:</label>
        <input type="file" class="form-control" name="product_image">
    </div>
    <button name="add" type="submit" class="btn btn-success">ADD</button>
</form>