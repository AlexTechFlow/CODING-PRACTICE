// Exercises: Arrays

var person = ["Nelson", "James", 1986, 2001];


// EXERCISE: Your top movies

// Create an array that contains the titles of a few of your favourite movies.
var movies = ["The Matrix", "Star Wars", "Avatar", "Lord of the Rings"];
// Print the amount of movies in the array
console.log(movies.length);
// Select the movie that you saw most recently from the array and store that into a variable.
var mostRecent = movies[3]
// Output the the above movie title like so: "The most recent movie I saw was XYZ"
console.log("The most recent movie I saw was " + mostRecent);
// Write a for loop that outputs all the movies from the array
for (var index = 0; index < movies.length; index++) {
    console.log(movies[index]);
}

