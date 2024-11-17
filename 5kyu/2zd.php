class CaesarCipher {
    private int $shift;

    public function __construct(int $shift) {
        $this->shift = $shift % 26; 
    }

    public function encode(string $text): string {
        return $this->transform($text, $this->shift);
    }

    public function decode(string $text): string {
        return $this->transform($text, 26 - $this->shift);
    }

    private function transform(string $text, int $shift): string {
        $result = '';
        $text = strtoupper($text);

        foreach (str_split($text) as $char) {
            if (ctype_alpha($char)) {
                $newChar = chr((ord($char) - ord('A') + $shift) % 26 + ord('A'));
                $result .= $newChar;
            } else {
                $result .= $char; 
            }
        }

        return $result;
    }
}
