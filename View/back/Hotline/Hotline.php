
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
  .call-green{
    color: #086637;
    font-size: 16px;
    line-height: 16px;
}
.call-orange{
    color: #f0a83c;
    font-size: 16px;
    line-height: 16px;
}
</style>
<div  class="col-md-12 col-12 col-md-offset-4 title"><h3 ><b>HOTLINE</b></h3></div>
<div class="row col-12 title-2">
<a href="index.php?action=HotlineController&act=insert"><h4>ADD HOTLINE</h4></a>
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
        <th>Phone</th>
        <th>Icon</th>
        <th colspan="3">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $Hotline=new Hotline();
        $result=$Hotline->HotlineAll();
        while($set=$result->fetch()):
      ?>
      <tr>
      <td><?php echo $set['id'];?> </td>
        <td><?php echo $set['name'];?></td>
        <td><?php echo $set['phone'];?></td>
        <td><i class="<?php echo $set['icon'];?>"></i></td>
        <td><a href="index.php?action=HotlineController&act=edit&id=<?php echo $set['id'];?>">Edit</a></td>
        <td><a href="index.php?action=HotlineController&act=delete&id=<?php echo $set['id'];?>">Delete</a></td>
      </tr>
     <?php
      endwhile;
     ?>
    </tbody>
  </table>
</div>