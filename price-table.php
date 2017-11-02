<?php 

    global $target_dir;
    $conn = new mysqli(DATABASE_HOST, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_NAME);
    $sql = "SELECT id, name, description, price, url FROM tovar";
    if (!$conn) {
            die("Ошибка подключения: " . mysqli_connect_error());
            }  
    $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {  
    while($row = mysqli_fetch_assoc($result)) { ?>
    
    
    <div class="price-table fadeInUp col-sm-6 col-md-3" data-wow-delay="0.1s" style="height:500px">
    
    <?php echo '<a href="#" data-toggle="modal" data-target="#'.$row["id"].'" ><img src=admin/'.$target_dir.$row["url"].' class="img-thumbnail" alt="tovar" width="110"></a>';?>
    
    <h6><?php echo $row["name"];?></h6>
    
    <span class="dollar"><i class="fa fa-rub" aria-hidden="true"></i></span>
    <span class="price"><?php echo $row["price"]; ?></span><br>
    <p><?php echo $row["description"];?> </p>
    <div id="<?php echo $row["id"]; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog" onclick="$('.modal').modal('hide');">

    <?php echo '<img src=admin/'.$target_dir.$row["url"].'  alt="tovar" width="500" style="margin:auto;padding-top:85px;">';?>
   

    </div>
    </div>
        
    </div>

   <?php }
    
    } 
    
    mysqli_close($conn);

?>