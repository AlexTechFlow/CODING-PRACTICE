// Exercises: Variables


// EXERCISE: The Age Calculator

// Forgot how old someone is? Calculate it!

// Store the current year in a variable.
// Store their birth year in a variable.
// Calculate their age based on the stored values.
// Output them to the screen like so: "They are NN years old.", substituting the values.

var currentYear = 2017; 
var birthYear = 1988;
var currentAge = currentYear - birthYear;
console.log(currentAge);
console.log("They are " + currentAge + " years old.");

// EXERCISE: The Lifetime Supply Calculator

// Ever wonder how much a "lifetime supply" of your favorite snack is? Wonder no more!

// Store your current age into a variable.
// Store a maximum age into a variable.
// Store an estimated amount per day (as a number).
// Calculate how many you would eat total for the rest of your life.
// Output the result to the screen like so: "You will need NN to last you until the ripe old age of X".

var myCurrentAge = 29;
var maxAge = 250;
var dailyAmount = 1;
var total = (maxAge - currentAge) * 365 * dailyAmount;
console.log("You will need" + total +" to last you until the ripe old age of");
console.log(maxAge - myCurrentAge);


// EXERCISE: The Temperature Converter

// It's hot out! Let's make a converter based on the steps here.

// Store a celsius temperature into a variable.
// Convert it to fahrenheit and output "NN°C is NN°F".
// Now store a fahrenheit temperature into a variable.
// Convert it to celsius and output "NN°F is NN°C."
