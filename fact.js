  function factorial(n) {
    if (n === 0) {
      return 1;
    }
    return n * factorial(n - 1);
  }
  
  // Prompt user for input at runtime
  let input = prompt("Enter a non-negative integer:");
  let number = parseInt(input);
  
  if (isNaN(number) || number < 0) {
    alert("Please enter a valid non-negative integer.");
  } else {
    let result = factorial(number);
    alert(`Factorial of ${number} is ${result}`);
    console.log(`Factorial of ${number} is ${result}`);
  }