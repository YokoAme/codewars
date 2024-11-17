function expanded_form(int $n): string {
  $digits = str_split((string)$n);
  $length = count($digits);
  $result = [];

  foreach ($digits as $index => $digit) {
      if ($digit != '0') {
          $result[] = $digit * pow(10, $length - $index - 1);
      }
  }

  return implode(' + ', $result);
}