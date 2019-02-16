<html>

<body style="font-family:'Courier New'; font-size:16px;">
    <font face='Courier New'> </font>
    

<center>

    <?php
    
        $a='ABCDEFGHIJKLMNOPQRSTUVWXYZ  ';
        $easteregg='1314271413042704231504021918271907042718150013081807270813162008180819081413';
        
        $mood='insane';
        $mute = true;
        $loud = false;
        $drunk = true;
        echo 'A: Welcome to your interview, I am Mr. A.','<br>';
        echo 'A: What is your name?', '<br>';
        
        //F talks
        if($loud){
            echo 'F: MY NAME IS FRANCO MIRANDA';
        }elseif($mute){
            echo 'F: ...';
        }else{
            echo 'F: My name is Franco Miranda';
        }
        if($drunk){ echo ' *burp*';}
        echo '<br>';
        
        //A responds
        if($loud){
            echo 'A: Wow, you certainly are intense...';
        }elseif($mute){
            echo 'A: There is no need to be shy sir.';
        }else{
            echo 'A: It is very nice to meet you Mr. Miranda';
        }
        if($drunk){ echo '<br>','A: Also, what is that smell?';}
        echo '<br>';
        echo 'A: Anyways, do you have any special talents you would like to share?','<br>';
        
        //F responds
        echo 'F: ';
        if($loud){
            echo 'I CAN NAME THE FIRST 10 SQUARE NUMBERS!';
        }elseif($mute){
            echo '...';
        }else{
              echo 'I can name the first 10 square numbers!', '<br>';
        }
        if($drunk){ echo ' *burp*';}
        echo '<br>';
        
        for($i=1;$i<11;$i++){
            $num = $i*$i;
            echo 'F: ';
            if($loud){
                echo $num,'!!';
            }elseif($mute){
                echo '...';
                if($drunk){ echo ' *burps ',$num,' times*';}
            }else{
              echo $num;  
            }
            if($drunk && !$mute){ echo ' *burp*';}
            echo '<br>';
        }
        echo "A: I must say, I certainly did not expect that.", '<br>';
        echo "(at this point in time, Franco was feeling rather ",$mood,") <br>";
        
        if($loud){
            echo 'F: I THINK ITS TIME FOR ME TO GO';
            if($drunk){ echo ' *burp*';}
        }elseif($mute){
            echo 'F: ...';
            if($drunk){ echo ' *burp*';}
        }else{
        
        switch($mood){
            case 'happy':
                echo "F: Thank you!";
                break;
            case 'sad':
                echo "F: I knew this was a mistake.";
                break;
            case 'insane':
                echo "F: My hovercraft is full of eels!";
                break;
            case 'sleepy':
                echo "F: ZZZZZZZZZZZZZZZZ";
                break;
            case 'absurd':
                echo "F: ";
                for($i=0;$i<76;$i+=2){
                    $q=$easteregg[$i];
                    $q.=$easteregg[$i+1];
                    $in=(int)$q;
                    echo $a[$in];
                }
                break;
        }
        }

    ?>  
</center>


</body>
</html>