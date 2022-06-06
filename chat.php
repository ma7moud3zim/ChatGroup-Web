<?php
    include 'db.php';
            $query= "SELECT * FROM chatroom ORDER BY id DESC";
            $run=$conn->query($query);
			
        while($row=$run->fetch_array()):	
        ?>
  
    <div id="chat_data">
        <span style="color: #ff7536"> <?php echo $row['name'];?> </span>
        <span style="color: #f9986c"> <?php echo $row['msg'];?> </span>
        <span style="float: right"> <?php echo formatData($row['date']);?> </span>
    </div>
	
        <?php endwhile?>