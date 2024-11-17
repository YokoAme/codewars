function orderWeight(string $str): string {
    $nums = explode(' ', trim($str)); 
    usort($nums, function($a, $b) {
        $weightA = array_sum(str_split($a)); 
        $weightB = array_sum(str_split($b));
        
        if ($weightA === $weightB) {
            return strcmp($a, $b);
        }
       
        return $weightA <=> $weightB;
    });

    return implode(' ', $nums); 
}