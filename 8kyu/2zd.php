function enough($cap, $on, $wait) {
  $available_space = $cap - $on; 
  if ($available_space >= $wait) {
      return 0;
  } else {
      return $wait - $available_space; }
}