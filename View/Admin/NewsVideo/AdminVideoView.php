<?php 
include("../View/Admin/Layout/SideBar.view.php");
include ("../Database/database.php");
include_once ("../Model/AdminVideoModel.php")
?>
<div class="main">
    <div class= "p-3"></div>
    <ul class="nav nav-tabs">
    <li><a href="AdminNews">News</a></li>
    <li><a href="AdminVideo">Blog</a></li>
    </ul>
    <div class= "p-3"></div>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal3" style="margin-left: 20px;">Create</button>
    <!-- Modal -->
    <div id="myModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form method="post" action="AdminVideo">    
            <div class="form-group">
                <label for="usr">Title</label>
                <input type="text" class="form-control" id="usr" name="title">
            </div>
            <div class="form-group">
                <label for="usr">youtube_link</label>
                <input type="text" class="form-control" id="usr" name="youtube_link">
            </div>
            <div class="form-group">
                <label for="usr">Descriptions</label>
                <input type="text" class="form-control" id="usr" name="description">
            </div>
            <div class="form-group">
                <label for="usr">Created_at</label>
                <input type="text" class="form-control" id="usr" name="created_at">
            </div>
            <div class="form-group">
                <label for="usr">Image</label>
                <input type="text" class="form-control" id="usr" name="image_url">
            </div>
            <div class="form-group">
                <label for="usr">Author</label>
                <input type="text" class="form-control" id="usr" name="author_id">
            </div>
            <div class="form-group">
                <label for="usr">Type</label>
                <input type="text" class="form-control" id="usr" name="type">
            </div>
            <div class="form-group">
                <label for="usr">View</label>
                <input type="text" class="form-control" id="usr" name="view">
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-default">Create</button>
        </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    <div class="p-2"></div>
    <table class="table table-success table-striped">
    <thead>
        <tr>
            <th><p>Id</p></th>
            <th><p>Title</p></th>
            <th><p>Description</p></th>
            <th><p>author_id</p></th>
            <th><p>youtube_link</p></th>
            <th><p>Created_at</p></th>
            <th><p>Image_url</p></th>
            <th><p>Type</p></th>
            <th><p>View</p></th>
            <th><p>Action</p></th>
        </tr>
    </thead>

    <tbody>
    <?php 
    $videos= selectVideo();
    foreach ($videos as $video) :
    ?>
        <tr>
            <td><?php echo $video['id'] ?></td>
            <td><?php echo $video['title'] ?></td>
            <td><?php echo $video['description'] ?></td>
            <td><?php echo $video['author_id'] ?></td>
            <td><?php echo $video['youtube_link'] ?></td>
            <td><?php echo $video['created_at'] ?></td>
            <td><?php echo '<img src="' . $video['image_url'] . '" style= "height:100px;width:100px;">';?></td>
            <td><?php echo $video['type'] ?></td>
            <td><?php echo $video['view'] ?></td>
            <td><button type= "submit">Sửa</button></td>
        </tr>
    </tbody>
    <?php endforeach; ?>
    </table>
</div>
