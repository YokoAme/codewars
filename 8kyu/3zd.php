function square_sum($numbers) : int {
    $sum=0;
    foreach($numbers as $num){
      $sum+=$num*$num;
    }
    return $sum;
}