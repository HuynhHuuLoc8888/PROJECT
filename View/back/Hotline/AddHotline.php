<style>
div.title {
    margin-top: 30px;
}
</style>

<div class="col-md-12 col-12 col-md-offset-4 title"><h3><b>ADD HOTLINE</b></h3></div>

<div class="row col-md-12 col-md-offset-4">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $Hotline=new Hotline();
      $result=$Hotline->HotlineId($id);
      $id=$result['id'];
      $name=$result['name'];
      $phone=$result['phone'];
      $icon=$result['icon'];
      $link=$result['link'];
    }
  ?>
    <!--tạo thẻ form-->

    <form action="index.php?action=HotlineController&act=insert_action" method="post" enctype="multipart/form-data">
    <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=HotlineController&act=Hotline" type="button" class="btn btn-default">Back</a>
    <table class="table" style="border: 0px;">
        <tr>
            <td>Id</td>
            <td> <input type="text" class="form-control" name="id" value="<?php if(isset($id)) echo $id;?>"
                    readonly /></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" class="form-control" name="name"
                    value="<?php if(isset($name)) echo $name;?>" maxlength="1000px"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" class="form-control" name="phone" value="<?php if(isset($phone)) echo $phone;?>"
                    maxlength="100px"></td>
        </tr>
        <tr>
            <td>Icon</td>
            <td><input type="text" class="form-control" name="icon" value="<?php if(isset($icon)) echo $icon;?>"
                    maxlength="100px"></td>
        </tr>
        <tr>
            <td>Link Details</td>
            <td><input type="text" class="form-control" name="link" value="<?php if(isset($link)) echo $link;?>"
                    maxlength="100px"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="submit">
            </td>
        </tr>

    </table>
    <!-- </form> -->
    </form>
</div>