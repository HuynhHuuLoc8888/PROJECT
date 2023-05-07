
<style>
  div.title{
    margin-top: 20px;
  }
  div.title-2{
    margin-top: 20px;
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
</style>
<div  class="col-md-12 col-12 col-md-offset-4 title"><h3 ><b>CATEGORY POSTS</b></h3></div>
<div class="row col-12 title-2">
<div class="col-4">
  <a href="index.php?action=CategoryPostController&act=insert"><h4>ADD CATEGORY POST</h4></a>
</div>
<div class="col-7">
        <form action="index.php?action=CategoryPostController&act=search" method="POST">
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
        <th>Name</th>
        <th>Slug</th>
        <th>Icon</th>
        <th>Description</th>
        <th>Title</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $categoryPost=new CategoryPost();
        if(isset($_POST['search']))
        {
            $timkiem=$_POST['search'];
            $result=$categoryPost->getsearch($timkiem);
        }
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['id'];?> </td>
        <td><?php echo $set['name'];?></td>
        <td><?php echo $set['slug'];?></td>
        <td><i class="<?php echo $set['icon'];?>"></i></td>
        <td><?php echo $set['description'];?></td>
        <td><?php echo $set['title'];?></td>
        <td><a href="index.php?action=CategoryPostController&act=edit&id=<?php echo $set['id'];?>">Edit</a></td>
        <td><a href="index.php?action=CategoryPostController&act=delete&id=<?php echo $set['id'];?>">Delete</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>