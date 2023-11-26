<div class="sidebar">
    <?php 
    // print_r($data["category"]);
    ?>
                        <h3 class="title">MENU</h3>
                        <ul>
                            <?php 
                            
                            foreach($data["category"] as $value){
                               echo "<li><a href='".URL."/index.php/home/category/".$value["id"]."/1'>".$value["category_name"]."</a></li>";
                            }
                            ?>
                            <!-- <li><a href="">Áo</a></li>
                            <li><a href="">Áo</a></li>
                            <li><a href="">Áo</a></li>
                            <li><a href="">Áo</a></li>
                            <li><a href="">Áo</a></li>
                            <li><a href="">Áo</a></li>
                            <li><a href="">Áo</a></li> -->
                        </ul>
                    </div>