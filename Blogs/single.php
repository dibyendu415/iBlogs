<?php include("includes/header.php") ;
if(isset($_GET['post'])){
    $id= mysqli_real_escape_string($db, $_GET['post']);
    $qry = "SELECT * FROM `posts` WHERE `id`='$id'";
}
$posts = $db->query($qry);
?>
    <br>
    <?php if($posts->num_rows>0){ 
            while($row = $posts->fetch_assoc()){
            ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title'] ?></h2>
            <p class="blog-post-meta"><?php echo $row['date'] ?> by <a href="#"><?php echo $row['author'] ?></a></p>
            <?php echo $row['body'];
            ?>
          </div><!-- /.blog-post -->
        <?php } }?>

    <blockquote>2 Comments</blockquote>
    <div class="comment-area">
        <form action="results.php" method="post" class="form">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" name="website" class="form-control" placeholder="Website(optional)">
            </div>
            <div class="form-group">
                <textarea name="comment" class="form-control" placeholder="Comment" cols="60" rows="10"></textarea>
            </div>
            <button type="submit" name="post_comment" class="btn btn-primary">Post Comment</button>
        </form>
        <br>
        <br>
        <br>
        <div class="comment">
            <div class="comment-head">
                <img src="images/comment_2.jpg" alt="Dibyendu Maji pic" height="50" width="50">
                <a href="#">Dibyendu Maji</a>
            </div>
            <p>This is a comment by Dibyendu Maji</p>
        </div>
        <div class="comment">
            <div class="comment-head">
                <img src="images/comment_1.jpg" alt="Dibyendu Maji pic" height="50" width="50">
                <a href="#">Dibs</a> <button class="btn btn-info btn-sm">Admin</button>
            </div>
            <p>This is a comment by Dibs</p>
        </div>
        <div class="comment">
            <div class="comment-head">
                <img src="images/comment_3.jpg" alt="Dibyendu Maji pic" height="50" width="50">
                <a href="#">Person</a>
            </div>
            <p>This is a comment by Perspn</p>
        </div>

    </div>
</div><!-- /.blog-main -->
<?php include("includes/sidebar.php") ?>
<?php include("includes/footer.php") ?>
        

     