
<style>
  div.title{
    margin-top: 20px;
  }
  div.title-2{
    margin-top: 20px;
    margin-bottom: 20px;
  }
  th{
    text-align:center;
  }
  i{
  color: #ff9800;
  font-size: 12px;
  line-height: 12px;
  margin-right: 5px;
}
.dropdown{
  margin-left:20px;
}
</style>
<div  class="col-md-12 col-12 col-md-offset-4 title"><h3 ><b>CATEGORY MANAGEMENT</b></h3></div>
<div class="row col-12 title-2">
  <div class="col-5">
    <a href="index.php?action=CategoryController&act=insert"><h4>ADD CATEGORY</h4></a>
  </div>
  <div class="col-7">
    <form action="index.php?action=CategoryController&act=search" method="POST">
            <input type="text" placeholder="Search.."  name="search">
            <input  type="submit" value="Search">
        </form>
  </div>
</div>
<!-- <div class="row col-12">
<a href="index.php?action=hoadon"><h4>Xem hóa đơn</h4></a><br/>
</div>
<div class="row col-12">
<a href="index.php?action=feedback"><h4>Feedback Khách hàng</h4></a><br/>
</div> -->
<div class="row">
<table class="table"border="1px solid black">
    <thead >
      <tr class="table-primary" align="center">
        <th>Id</th>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Phone</th>
        <th>Email</th>
        <th>URL</th>
        <th>Note</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $Category=new Category();
        if(isset($_POST['search']))
        {
            $timkiem=$_POST['search'];
            $result=$Category->getsearch($timkiem);
        }
        while($set=$result->fetch()):
      ?>
      <tr>
        <td><?php echo $set['id'];?></td>
        <td>
          <img width="50" name="image" height="50" src="../../Assets/back/images/<?php echo $set['image'];?>" alt="">
        </td>
        <td><?php echo $set['name'];?></td>
        <td><?php echo $set['description'];?></td>
        <td><?php echo $set['phone'];?></td>
        <td><?php echo $set['email'];?></td>
        <td><?php echo $set['url'];?></td>
        <td><?php echo $set['note'];?></td>
        <td><a href="index.php?action=CategoryController&act=edit&id=<?php echo $set['id'];?>">Edit</a></td>
        <td><a href="index.php?action=CategoryController&act=delete&id=<?php echo $set['id'];?>">Delete</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>