function multiples(int $m, float $n): array {
  $result = [];
  for ($i = 1; $i <= $m; $i++) {
      $result[] = $n * $i; 
  }
  return $result;
}