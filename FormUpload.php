<html>
<style>
    #lounge{ height: 450px; width: 800px; box-shadow: 0px 10px #000000; background-color: #FFFFFF}    
    body {
    background-image: url("bbg.png");
    background-repeat: repeat;
    }
</style>
<body style="font-family:'Courier New'; font-size:16px;">
    <font face='Courier New'> </font>
    
<center>
    <div id = 'lounge'>
    <h1>BANANAS ONLY LOUNGE</h1>
    <?php
        //moves file to 'uploads' folder
        function movePhoto($photo){
            move_uploaded_file($photo['tmp_name'], 'uploads/'.$photo['name']);
        }
        if($_FILES){
            $pic = $_FILES['userphoto'];
            //make sure file is less than 5MB before uploading
            if($pic['size']>5000000){
                echo 'This file is too large (MAX FILESIZE 5MB)';
            }else if(!($pic['type']=='image/jpeg' or $pic['type']=='image/png')){
            //make sure file is jpeg or png before uploading
                echo 'Only JPEG and PNG are supported';
            }else{
            //if no errors triggered, move file to permanent location
                movePhoto($pic);
            //show image
                echo "<div><img src='guard1.jpg'>";
                echo "<img src='uploads/",$pic['name'],"'>";
                echo "<img src='guard2.jpg'></div>";
                //if banana, greet our guest. if corn, show them the door.
                if($pic['name']=='banana4.png'){
                    echo "<h4>Sir, we're going to have to ask you to leave</h4>";
                }else{
                    echo "<h3>Welcome in, Mr. Banana</h3>";
                }
                
            }
        }else{
            //if no image, show the bouncers
            echo "<div><img src='guards.jpg'></div>";
        }
        
    ?>
    <form action='' method='POST' enctype='multipart/form-data'>
    <input type='file' name='userphoto' >
    <input type='submit' value='Upload' >
    </form>
    </div>
</center>
</body>
</html>