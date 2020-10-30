<?php
    /**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
    do{
    printf("Input Score %d ('e' for end of data): ",$i=$i+1);
    fscanf(STDIN,"%s",$score[]);
    $a=$i-1;
    foreach($score as $a => $score1){
if ($score1=="e" && $i==1) {
printf("No data!!!");
exit;}
else if ($score1=="e"){
    printf("\n");
    printf("The average score for");
    
    $score2=array_pop($score);
    $average=array_sum($score)/count($score);
    foreach($score as $a => $score0){
    if (count($score)==1)
    $sybol=" ";
    else if (count($score)==2){
        if ($a==0)
        $sybol=" ";
        else $sybol=" and ";
    }
    else {if ($a==0)
        $sybol=" ";
        else if ($a==$i-2)
        $sybol=" and ";
        else $sybol=", ";
    }
   printf("%s%.2f",$sybol,$score0);}
    printf(" = %.2f",$average);
    exit;
}
else 
continue;
    }
}
    while($score1!="e");