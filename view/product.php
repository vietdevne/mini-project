
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php  foreach($dbh->query('SELECT * from product') as $row) {
        
     ?>
    <tr>
      <th scope="row"><?=$row['product_name']?></th>
      <td><?=number_format($row['product_price'])?></td>
      <td><img width="200" height="200" src="uploads/<?=$row['product_image']?>" alt=""></td>
      <td><a href="?act=editForm&id=<?=$row['product_id']?>" class="btn btn-warning">Edit</a></td>
      <td><a href="?act=delete&id=<?=$row['product_id']?>" class="btn btn-outline-danger">Delete</a></td>
    </tr>
  <? }?>
  </tbody>
</table>
<a href="?act=add-new" class="btn btn-success">Add new</a>
<a href="?act=logout" class="btn btn-outline-info my-2 my-sm-0 text-left">Logout</a>