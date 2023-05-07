<style>
div.title {
    margin-top: 30px;
}
</style>

<div class="col-md-12 col-12 col-md-offset-4 title"><h3><b>ADD CATEGORY POST</b></h3></div>

<div class="row col-md-12 col-md-offset-4">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $CategoryPost=new CategoryPost();
      $result=$CategoryPost->getCategoryPostId($id);
      $id=$result['id'];
      $name=$result['name'];
      $slug=$result['slug'];
      $icon=$result['icon'];
      $description=$result['description'];
      $title=$result['title'];
    }
  ?>
    <!--tạo thẻ form-->

    <form action="index.php?action=CategoryPostController&act=insert_action" method="post" enctype="multipart/form-data">
    <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=CategoryPostController&act=CategoryPost" type="button" class="btn btn-default">Back</a>
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
            <td>Slug</td>
            <td><input type="text" class="form-control" name="slug"
                    value="<?php if(isset($slug)) echo $slug;?>" maxlength="1000px"></td>
        </tr>
        <tr>
            <td>Icon</td>
            <td><input type="text" class="form-control" name="icon"
                    value="<?php if(isset($icon)) echo $icon;?>" maxlength="1000px"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" class="form-control" name="description" value="<?php if(isset($description)) echo $description;?>"
                    maxlength="100px"></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input type="text" class="form-control" name="title"
                    value="<?php if(isset($title)) echo $title;?>" maxlength="1000px"></td>
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