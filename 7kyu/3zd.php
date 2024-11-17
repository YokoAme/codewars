function square_digits(int $num): int {
  $digits = str_split((string)$num);
  $result = '';

  foreach ($digits as $digit) {
      $result .= ($digit * $digit);
  }

  return (int)$result;
}