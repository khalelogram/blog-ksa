<?php  
$output = '';  
$video_id = '';  
sleep(1);  
$connect = mysqli_connect("localhost", "root", "", "testing");  
$sql = "SELECT * FROM tbl_video WHERE video_id > ".$_POST['last_video_id']." LIMIT 2";  
$result = mysqli_query($connect, $sql);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
          $video_id = $row["video_id"];  
          $output .= '
               <div class="card">
                              <div class="inner">
                              <img src="../../assets/img/news6.jpg" class="card-img-top " style="height: 300px;object-fit: cover;">
                              </div>
                              <div class="card-body">
                              <h5 class="card-title">'.$row["video_title"].' </h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. <button type="button" class="btn btn-secondary">Read more</button></p> 
                              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                              </div>
                              </div>  
                
               ';  
     }  
     $output .= '  
               <div><div id="remove_row">  
                    <button type="button" name="btn_more" data-vid="'. $video_id .'" id="btn_more" class="btn btn-success form-control">Load More</button> 
               </div> 
               </div>
     ';  
     echo $output;  
}  
?>
