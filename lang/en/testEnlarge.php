<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" conetent="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../css/selfstyle.css" rel="stylesheet" type="text/css">
<script src="../../js/self.js"></script>

</head>
<body>

<?php
    include "db_conn.php";
    $herb_list_information=mysqli_query($conn,"SELECT * FROM herb_list")or die(mysqli_error($conn));
                        
    while($data1=mysqli_fetch_array($herb_list_information)){
        $herb_id=$data1['herb_id'];
        $herb_name=$data1['local_name'];
        $other_name=$data1['other_name'];
        $sci_name=$data1['scientific_name'];
        $family=$data1['family'];
        $image=$data1['image'];
    }
?>
<img id="herbImg" src="../../pics/<?php echo $image;?>" alt="<?php echo $herb_name;?>" style="float:right;margin:0px 0px 0px 10px" width="250" height="250">

<!-- The Modal -->
<div id="enlargeImg" class="enlarge">
  <span class="closeImg">&times;</span>
  <img class="largeImg" id="bigImg">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('enlargeImg');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('herbImg');
var modalImg = document.getElementById("bigImg");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeImg")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}

document.onkeydown = function(e){
    e = e || window.event;
    if(e.keyCode == 27){ //Esc
        modal.style.display = "none";
    }
};

</script>

</body>
</html>



<!--
    id=herbImg
alt="Trolltunga, Norway"

<div id="enlargeImg" class="enlarge">
<span lass="closeImg">&times;
<img class="largeImg" id="bigImg">
<div id="caption">


onclick="enlarge();"

<?php //echo $herb_name;?>
-->