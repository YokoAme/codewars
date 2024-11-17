function removeEveryOther($array) {
  $result = [];
  for ($i = 0; $i < count($array); $i++) {
      if ($i % 2 == 0) {
          $result[] = $array[$i];
      }
  }

  return $result;
}