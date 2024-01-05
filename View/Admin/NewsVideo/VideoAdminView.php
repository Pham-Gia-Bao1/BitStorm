<?php
include("../View/Admin/Layout/SideBar.view.php");
include_once("../Controller/VideoAdminController.php");
include_once("../Model/VideoAdminModel.php");
?>
<title>AdminVideo</title>

<div class='main'>
<div class="p-3"></div>
    <div class="container red topBotomBordersOut">
        <a href="VideoAdmin">Video</a>
        <a href="AdminNews">News</a>
        <a href="AdminPodCasts">Podcasts</a>
    </div>
    <div class="action d-flex justify-content-end">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#createModal" style="margin-left: 20px;">Create</button>
    <!-- Modal -->
    </div>
    <div class="container">
        <h2 class="title">
            <span class="title-word title-word-1">V</span>
            <span class="title-word title-word-2">I</span>
            <span class="title-word title-word-3">D</span>
            <span class="title-word title-word-4">E</span>
            <span class="title-word title-word-1">O</span>
            <span class="title-word title-word-3">S</span>
        </h2>
    </div>
    <div id="createModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="VideoAdmin">
                        <div class="form-group">
                            <label for="usr">youtube_link</label>
                            <input type="text" class="form-control" id="youtube_link" name="youtube_link">
                        </div>
                        <div class="form-group">
                            <label for="usr">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label for="author">Author_id</label>
                            <select name="author_id" value="author_id">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="usr">Descriptions</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                        <div class="form-group">
                            <label for="usr">Duration</label>
                            <input type="text" class="form-control" id="duration" name="duration">
                        </div>
                        <div class="form-group">
                            <label for="usr">Type</label>
                            <select name="type" value="type">
                                <option value="Tình Yêu">Tình Yêu</option>
                                <option value="Gia Đình">Gia Đình</option>
                                <option value="Bạn Bè">Bạn Bè"</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="usr">View</label>
                            <input type="text" class="form-control" id="view" name="view">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default">Create</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3"></div>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Youtube_link</th>
                <th>Title</th>
                <th>Author_id</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Created_at</th>
                <th>Type</th>
                <th>View</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $videos = displayAllVideo();
            foreach ($videos as $video) {
            ?>
                <tr>
                    <td> <?php echo $video['id'] ?></td>
                    <td> <?php echo $video['youtube_link'] ?></td>
                    <td> <?php echo $video['title'] ?></td>
                    <td> <?php echo $video['author_id'] ?></td>
                    <td> <?php echo $video['description'] ?></td>
                    <td> <?php echo $video['duration'] ?></td>
                    <td> <?php echo $video['created_at'] ?></td>
                    <td> <?php echo $video['type'] ?></td>
                    <td> <?php echo $video['view'] ?></td>
                    <td>
                        <div class="action d-flex justify-content-end">
                            <a href="VideoAdmin?id_update=<?php echo $video['id'] ?>" id="updateLink">
                                <button data-bs-toggle="modal" data-bs-target="#update_model" type="button" class="btn btn-warning">Update</button>
                            </a>
                            <a href="VideoAdmin?id=<?php echo $video['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-tdash"></i></a>
                        </div>
                    </td>
                    </td>
                <?php  } ?>
                <?php
                if (isset($_POST['id_update'])) {
                    $id = $_POST['id_update'];
                    $video = displayOneVideo($id);
                }
                ?>
                <div id="update_model" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="VideoAdmin">
                                    <div class="form-group">
                                            <label for="usr">Id</label>
                                            <input type="text" class="form-control" id="title" name="id" value=<?php echo $video['id'] ?> disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">youtube_link</label>
                                        <input type="text" class="form-control" id="youtube_link" name="youtube_link" value=<?php echo $video['youtube_link'] ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value=<?php echo $video['title'] ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="author">Author_id</label>
                                        <select name="author_id" value=<?php echo $video['author_id'] ?>>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Descriptions</label>
                                        <input type="text" class="form-control" id="description" name="description" value=<?php echo $video['description'] ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Duration</label>
                                        <input type="text" class="form-control" id="duration" name="duration" value=<?php echo $video['duration'] ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Created_at</label>
                                        <input type="text" class="form-control" id="created_at" name="created_at" value=<?php echo $video['created_at'] ?> disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">Type</label>
                                        <input type="text" class="form-control" id="type" name="type" value=<?php echo $video['type'] ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">View</label>
                                        <input type="text" class="form-control" id="view" name="view" value=<?php echo $video['view'] ?>>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-default">Update</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        const urlParams = new URLSearchParams(window.location.search);
                        const idUpdateParam = urlParams.get('id_update');
                        if (idUpdateParam) {
                            $('#update_model').modal('show');
                        }
                        $('#update_model').on('hidden.bs.modal', function(e) {
                            window.location.href = 'VideoAdmin';
                        });
                    });
                </script>
        </tbody>
    </table>
</div>