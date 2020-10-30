<?php
    /**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
    printf("Input number of data: ");
    fscanf(STDIN,"%d\n",$num);
    if ($num>0) {
    for ($i=0;$i<$num;$i++){
    printf("Input Score %d: ",$i+1);
    fscanf(STDIN,"%f\n",$score[]);
 }
    printf("\n");
    printf("The average score for");
    $average=array_sum($score)/count($score);
    foreach($score as $i => $score0){
    if (count($score)==1)
    $sybol=" ";
    else if (count($score)==2){
        if ($i==0)
        $sybol=" ";
        else $sybol=" and ";
    }
    else {if ($i==0)
        $sybol=" ";
        else if ($i==$num-1)
        $sybol=" and ";
        else $sybol=", ";
    }
   printf("%s%.2f",$sybol,$score0);}
    printf(" = %.2f",$average);}
    else printf("Please input right number!");