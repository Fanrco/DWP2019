<html>

<body style="font-family:'Courier New'; font-size:12px;">
    <font face='Courier New'> </font>

<center>
  Welcome, my name is 
    <?php
    //this is for hospitality 
    $name='Franco';
    echo $name,'<br>';   
    echo "and this is a sandpile fractal",'<br>';
    
    //THIS IS WHERE THE SANDPILE CODE STARTS
    //ADJUST "slen" "smax" AND "sand" FOR FRACTAL FUN
    $slen = 41;
    $sand = 1000;
    $smax=3;
    
    //generate a pseudo-2D array for the sandpiles 
    $s = array();
    
    //create character library (so our sandpile is pretty)
    $symb=array(".","O","X","#","@");
    
    for($i=0;$i<$slen;$i++){
        for($j=0;$j<$slen;$j++){
            $s[$i*$slen+$j]=0;
        }
    }
    //set center square to big sandpile (2nd line is amount of "sand")
    $cent=($slen-1)/2;
    $s[$cent*$slen+$cent]=$sand;
    
    //apply sandpile rules until center has collapsed
    
    while(1){
    $done=true;
    for($i=1;$i<$slen-1;$i++){
        for($j=1;$j<$slen-1;$j++){
            if($s[$i*$slen+$j]>$smax){
                $done=false;
                $s[$i*$slen+$j]-=4;
                $s[$i*$slen+$j+1]+=1;
                $s[$i*$slen+$j-1]+=1;
                $s[($i+1)*$slen+$j]+=1;
                $s[($i-1)*$slen+$j]+=1;
            }
        }
    }
    if($done){
        break;
    }
    }
    
    //go back through the array and print each number as its corresponding ASCII character 
    for($i=0;$i<$slen;$i++){
        for($j=0;$j<$slen;$j++){
           echo $symb[$s[$i*$slen+$j]]," ";
        }
        echo '<br>';
    }
    ?>  
</center>


</body>
</html>