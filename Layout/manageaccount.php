<?php
require('../Layout/config.php');
?>
<body>
<div class="div1">
    <?php
    $sql="SELECT pdf from user";
    $query=mysqli_query($conn,$sql);
    while($info=mysqli_fetch_array($query)){

    
    
    ?>
<embed type="application/pdf" src="pdf/<?php echo $info['pdf']; ?>" width="700" height="400">
    <?php } ?>
    </div>

    </body>