function factorial(n) {
  // Base case: factorial of 0 is 1
  if (n === 0) {
    return 1;
  }
  // Recursive case: n! = n * (n-1)!
  return n * factorial(n - 1);
}

const number = 5;
console.log(`Factorial of ${number} is ${factorial(number)}`); 
