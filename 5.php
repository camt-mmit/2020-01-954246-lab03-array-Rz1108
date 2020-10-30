<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
    printf("Input the number of grades: ");
    fscanf(STDIN,"%d\n",$num);
    printf("Input grade data from max score to min score\n");
    for ($i0=0; $i0 < $num; $i0++) { 
    printf("%4d: Input grade data (grade min_score): ",$i0+1);
    fscanf(STDIN,"%s %d\n",$class[],$grade[]);
    }
    $grade1=array_reverse($grade);
    $class1=array_reverse($class);
    do{
    printf("Input score %3d ('e' for end of data): ",$i=$i+1);
    fscanf(STDIN,"%s\n",$score[]);
    $i3=$i-1;

    if ($score[$i3]=="e" && $i==1) {
        printf("No data!!!");
        exit;}

    else if ($score[$i3]=="e"){
        printf("\n");
        printf("The summary for");
        $score2=array_pop($score);
        $average=array_sum($score)/count($score);
        for ($b=0;$b<=$i3-1;$b++){
            $variance1=(($score[$b]-$average)*($score[$b]-$average)+$variance1);
        }
        $variance=$variance1/$i3;
        foreach($score as $i3 => $score0){
        if (count($score)==1)
        $sybol=" ";
        else if (count($score)==2){
            if ($i3==0)
            $sybol=" ";
            else $sybol=" and ";
        }
        else {if ($i3==0)
            $sybol=" ";
            else if ($i3==$i-2)
            $sybol=" and ";
            else $sybol=", ";
        }
       printf("%s%.2f",$sybol,$score0);}
        printf("\n");
        printf("Average = %.2f\n",$average);
        printf("Variance = %.2f",$variance);
        exit;
    }
    else{
        for($i1=0;$i1<$num;$i1++){
        $i2=$i1+1;
        if (($score[$i3]>=$grade1[$i1] && $score[$i3]<$grade1[$i2] && $i1!=$num-1) || ($i1==$num-1 && $score[$i3]>=$grade1[$i1])) 
        printf("Grade is %s\n",$class1[$i1]);
        else printf("");
    }}
    
}
     while ($score1!="e");