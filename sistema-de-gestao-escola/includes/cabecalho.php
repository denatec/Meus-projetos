
<div class="container">
        <div class="topbar">
        <div class="logo">
            <h2><a href="dasboard.php">University ITLS</a></h2>
        </div>
        <div class="search">
            <input type="search" id="search" placeholder="search here">
        <label for="search"><i class='bx bx-search'></i>
        </div>
        <?php 
   $sql="SELECT * FROM login";
   $query=$conn->query($sql);
   while ($row=$query->fetch_assoc()) {
    # code...

   
    ?>
        <div class="user">
            <img width="40px" src="img/images.jpeg" alt="">
        </div>
        <span><?= $row['username']?></span>
    </div>
    <?php 
}
    ?>