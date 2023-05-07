<style>
div.title {
    margin-top: 30px;
}
</style>    

<div class="col-md-12 col-12 col-md-offset-4 title"><h3><b>ADD CATEGORY</b></h3></div>

<div class="row col-md-12 col-md-offset-4">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $Category=new Category();
      $result=$Category->CategoryId($id);
      $id=$result['id'];
      $name=$result['name'];
      $description=$result['description'];
      $phone=$result['phone'];
      $email=$result['email'];
      $url=$result['url'];
      $note=$result['note'];
      $image=$result['image'];
    }
  ?>
    <!--tạo thẻ form-->

    <form action="index.php?action=CategoryController&act=insert_action" method="post" enctype="multipart/form-data">
    <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=CategoryController&act=Category" type="button" class="btn btn-default">Back</a>
    <table class="table" style="border: 0px;">
        <tr>
            <td>ID</td>
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
            <td><input type="text" class="form-control" name="phone"
                    value="<?php if(isset($phone)) echo $phone;?>" maxlength="1000px"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" class="form-control" name="email"
                    value="<?php if(isset($email)) echo $email;?>" maxlength="1000px"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" class="form-control" name="description" value="<?php if(isset($description)) echo $description;?>"
                    maxlength="1000px"></td>
        </tr>
        <tr>
            <td>URL</td>
            <td><input type="text" class="form-control" name="url" value="<?php if(isset($url)) echo $url;?>"
                    maxlength="1000px"></td>
        </tr>
        <tr>
            <td>Note</td>
            <td><input type="text" class="form-control" name="note" value="<?php if(isset($note)) echo $note;?>"
                    maxlength="1000px"></td>
        </tr>
        <tr>
            <td>Hình</td>
            <td>

                <label><img width="50px" height="50px" src=""></label>
                Chọn file để upload:
                <input type="file" name="image" id="fileupload">

            </td>
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