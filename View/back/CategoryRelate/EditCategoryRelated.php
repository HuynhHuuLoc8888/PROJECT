<style>
div.title {
    margin-top: 30px;
}   
</style>

<div class="col-md-12 col-12 col-md-offset-4 title">
    <h3><b>EDIT CATEGORY RELATED</b></h3>
</div>

<div class="row col-md-12 col-md-offset-4">
    <?php
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $CategoryRelated=new CategoryRelated();
      $result=$CategoryRelated->CategoryRelatedId($id);
      $id=$result['id'];
      $name=$result['name'];
      $description=$result['description'];
      $note=$result['note'];
      $url=$result['url'];
    }
  ?>
    <!--tạo thẻ form-->
    <?php
        echo '<form action="index.php?action=CategoryRelatedController&act=edit_action&id='.$id.'"method="post" enctype="multipart/form-data">';
    ?>
    <a style="margin-top:20px;margin-bottom:20px;" href="index.php?action=CategoryRelatedController&act=CategoryRelated"
        type="button" class="btn btn-default">Back</a>
    <table class="table" style="border: 0px;">
        <tr>
            <td>Id</td>
            <td> <input type="text" class="form-control" name="id" value="<?php if(isset($id)) echo $id;?>" readonly />
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td>
            <textarea name="name" id="w3review" cols="50" rows="2"><?php if(isset($name)) echo $name;?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td>Description</td>
            <td>
                <textarea name="description" id="w3review" cols="50" rows="4"><?php if(isset($description)) echo $description;?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td>Note</td>
            <td><input type="text" class="form-control" name="note"
                    value="<?php if(isset($note)) echo $note;?>" maxlength="1000px"></td>
        </tr>
        <tr>
            <td>URL</td>
            <td>
                <textarea name="url" id="w3review" cols="50" rows="4"><?php if(isset($url)) echo $url;?>
                </textarea>
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