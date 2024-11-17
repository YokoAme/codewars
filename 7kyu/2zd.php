function disemvowel($string) {
  return preg_replace('/[aeiouAEIOU]/', '', $string);
}