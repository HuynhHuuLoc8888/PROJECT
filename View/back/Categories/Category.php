
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
.pagination {
	list-style-type: none;
	padding: 10px 0;
	display: inline-flex;
	justify-content: space-between;
	box-sizing: border-box;
}
.pagination li {
	box-sizing: border-box;
	padding-right: 10px;
}
.pagination li a {
	box-sizing: border-box;
	background-color: #e2e6e6;
	padding: 8px;
	text-decoration: none;
	font-size: 12px;
	font-weight: bold;
	color: #616872;
	border-radius: 4px;
}
.pagination li a:hover {
	background-color: #d4dada;
}
.pagination .next a, .pagination .prev a {
	text-transform: uppercase;
	font-size: 12px;
}
.pagination .currentpage a {
	background-color: #518acb;
	color: #fff;
}
.pagination .currentpage a:hover {
	background-color: #518acb;
}

</style>
<?php
    $Category=new Category();
    $result=$Category->CategoryAll();
    $count=$result->rowCount();
    $limit=20;
    $p=new pagination();
     $current_page=$p->findPage($count,$limit);
    $start=$p->findStart($limit);
    $current_page = isset($_GET['page'])?$_GET['page']:1;
?>
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
        $result=$Category->CategoryAll_pagination($start,$limit);
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
<div class="col-md-12 col-lg-12 col-sm-12" width="100%" style="margin-right:300px;">
    <?php if (ceil($count / $limit) > 0): ?>
        <ul class="pagination" style="margin-left:400px;">
                <?php if ($current_page > 1): ?>
            <li class="prev"><a href="index.php?action=CategoryController&act=Category&page=<?php echo  $current_page-1 ?>">Prev</a></li>
            <?php endif; ?>

            <?php if ($current_page > 3): ?>
            <li class="start"><a href="index.php?action=CategoryController&act=Category&page=1">1</a></li>
            <li class="dots">...</li>
            <?php endif; ?>

            <?php if ($current_page-2 > 0): ?><li class="page"><a href="index.php?action=CategoryController&act=Category&page=<?php echo  $current_page-2 ?>"><?php echo  $current_page-2 ?></a></li><?php endif; ?>
            <?php if ($current_page-1 > 0): ?><li class="page"><a href="index.php?action=CategoryController&act=Category&page=<?php echo  $current_page-1 ?>"><?php echo  $current_page-1 ?></a></li><?php endif; ?>

            <li class="currentpage"><a href="index.php?action=CategoryController&act=Category&page=<?php echo  $current_page ?>"><?php echo  $current_page ?></a></li>

            <?php if ($current_page+1 < ceil($count / $limit)+1): ?><li class="page"><a href="index.php?action=CategoryController&act=Category&page=<?php echo  $current_page+1 ?>"><?php echo  $current_page+1 ?></a></li><?php endif; ?>
            <?php if ($current_page+2 < ceil($count / $limit)+1): ?><li class="page"><a href="index.php?action=CategoryController&act=Category&page=<?php echo  $current_page+2 ?>"><?php echo  $current_page+2 ?></a></li><?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)-2): ?>
            <li class="dots">...</li>
            <li class="end"><a href="index.php?action=CategoryController&act=Category&page=<?php echo ceil($count / $limit) ?>"><?php echo ceil($count / $limit) ?></a></li>
            <?php endif; ?>

            <?php if ($current_page < ceil($count / $limit)): ?>
            <li class="next"><a href="index.php?action=CategoryController&act=Category&page=<?php echo $current_page+1 ?>">Next</a></li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</div>