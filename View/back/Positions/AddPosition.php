<style>
div.title {
    margin-top: 30px;
}
</style>

<div class="col-md-12 col-12 col-md-offset-4 title"><h3><b>ADD POSITION</b></h3></div>

<div class="row col-md-12 col-md-offset-4">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $Positions=new Positions();
      $result=$Positions->PositionId($id);
      $id=$result['id'];
      $name=$result['name'];
      $description=$result['description'];
    }
  ?>
    <!--tạo thẻ form-->

    <form action="index.php?action=PositionController&act=insert_action" method="post" enctype="multipart/form-data">
    <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=PositionController&act=positions" type="button" class="btn btn-default">Back</a>
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
            <td>Description</td>
            <td><input type="text" class="form-control" name="description" value="<?php if(isset($description)) echo $description;?>"
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