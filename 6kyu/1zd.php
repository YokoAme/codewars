function expandedForm(num) {
  let [integerPart, fractionalPart] = num.toString().split('.');
  let result = [];

  integerPart.split('').forEach((digit, index) => {
    if (digit !== '0') {
      result.push(digit * Math.pow(10, integerPart.length - index - 1));
    }
  });

  if (fractionalPart) {
    fractionalPart.split('').forEach((digit, index) => {
      if (digit !== '0') {
        result.push(${digit}/${Math.pow(10, index + 1)});
      }
    });
  }

  return result.join(' + ');
}