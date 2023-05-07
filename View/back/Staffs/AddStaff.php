<style>
div.title {
    margin-top: 30px;
}
</style>

<div class="col-md-12 col-12 col-md-offset-4 title"><h3><b>ADD STAFF</b></h3></div>

<div class="row col-md-12 col-md-offset-4">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $Staff=new Staff();
      $result=$Staff->StaffId($id);
      $id=$result['id'];
      $position_id=$result['position_id'];
      $name=$result['name'];
      $phone=$result['phone'];
      $skype=$result['skype'];
      $email=$result['email'];
      $description=$result['description'];
      $image=$result['image'];
    }
  ?>
    <!--tạo thẻ form-->

    <form action="index.php?action=StaffController&act=insert_action" method="post" enctype="multipart/form-data">
    <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=StaffController&act=Staffs" type="button" class="btn btn-default">Back</a>
    <table class="table" style="border: 0px;">
        <tr>
            <td>Staff ID</td>
            <td> <input type="text" class="form-control" name="id" value="<?php if(isset($id)) echo $id;?>"
                    readonly /></td>
        </tr>
        <tr>
            <td>Staff Name</td>
            <td><input type="text" class="form-control" name="name"
                    value="<?php if(isset($name)) echo $name;?>" maxlength="100px"></td>
        </tr>
        <tr>
            <td>Position_id</td>
            <td>
                <select name="position_id" class="form-control" style="width:150px;">
                    <?php
                    $Position=new Position();
                    $result=$Position->AllPosition();
                    while($set=$result->fetch()):
                    ?>
                        <option value="<?php echo $set['id'];?>"><?php echo $set['name'];?></option>
                    <?php
                    endwhile;
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" class="form-control" name="phone"
                    value="<?php if(isset($phone)) echo $phone;?>" maxlength="100px"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" class="form-control" name="email"
                    value="<?php if(isset($email)) echo $email;?>" maxlength="100px"></td>
        </tr>
        <tr>
            <td>Skype</td>
            <td><input type="text" class="form-control" name="skype" value="<?php if(isset($skype)) echo $skype;?>"
                    maxlength="100px"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" class="form-control" name="description" value="<?php if(isset($description)) echo $description;?>"
                    maxlength="100px"></td>
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