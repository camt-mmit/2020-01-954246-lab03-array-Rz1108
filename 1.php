<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
   printf("Input number of data: ");
   fscanf(STDIN,"%d\n",$num);
   for ($i=1;$i<=$num;$i++){
   printf("Input Score %d: ",$i);
   fscanf(STDIN,"%f\n",$score[]);
}
   printf("\n");
   $average=array_sum($score)/$num;
   printf("The average score = %.2f",$average);
