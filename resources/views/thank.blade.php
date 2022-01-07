//Cảm ơn quý khách đã đặt vé!!!
<?php
//á
$fp = @fopen('C:\Users\ADMIN\Desktop\bacay1.txt', "r");
function tinhc($a,$y1,$y2,$y3,$y4)
{
    $c1=$y2-$y3;
    $c2=$y4-$y1;
    $c3=$y4-$y3;
    $c4=$y2-$y1;

    if($y1<$y3 && $y3<$y2 && $y2<$y4)
    {
        return $a*$c1;
    }
    if($y3<$y1 && $y1<$y4 && $y4<$y2)
    {
        return $a*$c2;
    }
    if($y3>$y1 && $y4<$y2)
    {
        return $a*$c3;
    }
    if($y3<$y1 && $y4>$y2)
    {
        return $a*$c4;
    }
}
function area($x1,$x2,$x3,$x4,$y1,$y2,$y3,$y4)
{
    $r1=$x2-$x3;
    $r2=$x4-$x1;
    $r3=$x4-$x3;
    $r4=$x2-$x1;
    
    if($x1<$x3 && $x3<$x2 && $x2<$x4)
    {
        return tinhc($r1,$y1,$y2,$y3,$y4);
    }
    if($x3<$x1 && $x1<$x4 && $x4<$x2)
    {
        return tinhc($r2,$y1,$y2,$y3,$y4);
    }
    if($x3>$x1 && $x4<$x2)
    {
        return tinhc($r3,$y1,$y2,$y3,$y4);
    }
    if($x3<$x1 && $x4>$x2)
    {
        return tinhc($r4,$y1,$y2,$y3,$y4);
    }
}
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    // Đọc file và trả về nội dung
    $data = fread($fp, filesize('C:\Users\ADMIN\Desktop\bacay1.txt'));
    echo $data;
    echo "       --     ";
    $data=str_replace("\n"," ",$data);
    echo $data;
    $point=explode(" ",$data);
    echo $point[0];
    echo "       --     ";
    for ($i=1; $i < 9; $i=$i+2) { 
        $x[$i]=$point[$i]; 
    }
    for ($i=2; $i < 9; $i=$i+2) { 
        $y[$i]=$point[$i]; 
    }
    //chiều rộng hình 2 nằm trong hình 1
    $r1=$x2-$x3;
    $r2=$x4-$x1;
    $r3=$x4-$x3;
    $r4=$x2-$x1;
    
    $c1=$y2-$y3;
    $c2=$y4-$y1;
    $c3=$y4-$y3;
    $c4=$y2-$y1;

    
    if($x[1]<$x[3] && $x[2]>$x[4])
        if($y[1]<$y[3] && $y[2]>$y[4])
        {
            return ($x[4]-$x[3])*($y[4]-$y[3])
        }
        if($y[1]>$y[3] && $y[2]<$y[4])
        {
            return ($y[2]-$y[1])*($x[4]-$x[3])
        }
        if($y[1]>$y[3] && $y[1]<$y[4] && $y[2]>$y[4])
        {
            return ($y[4]-$y[1])*($x[4]-$x[3])
        }
    }
    if($x[1]>$x[3] && $x[2]<$x[4])
        if($y[1]<$y[3] && $y[2]>$y[4])
        {
            return ($x[2]-$x[1])*()
        }
        if($y[1]>$y[3] && $y[2]<$y[4])
        {
            return ($y[2]-$y[1])*(($x[4]-$x[3])
        }
        if($y[1]>$y[3] && $y[1]<$y[4] && $y[2]>$y[4])
        {
            return ($y[4]-$y[1])*(($x[4]-$x[3])
        }
    }

    // $point=explode("\n",$data);
    // for ($i=0; $i < 3; $i++) { 
    //     echo $data_split[$i];
    //     echo "....";
    // }
    
    // for ($i=1; $i < 3; $i++) { 
    //     $point[$i]=explode(" ",$data_split[$i]);
    //     for ($j=0; $j < 4; $j=$j+2)
    //     {
           
    //         $x[] $str[$i][$j];
    //     }
    //     echo "++";
    // }
    // for ($i=1; $i < 3; $i++) { 
    //     for ($j=0; $j < 4; $j++)
    //     {
    //         if($str[1][0]>$str[2][0] && str[1][0]<$str[2][3])

    //     }
    //     echo "++";
    // }
    // for ($i=0; $i <3 ; $i++) { 
    //     $("data".$i)=explode(" ",$data_split[$i]);
    //     echo $data1;
    // }
    // for ($i=0; $i <3 ; $i++) { 
    //     for ($j=0; $j <3 ; $j++) { 
    //         $("")
    //     }
    // }
}
?>