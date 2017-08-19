// First let's practice using events. 
// TIP - Comment out the previous exercise when starting the next one

// 1. Get the browser to write to show an alert when someone clicks anywhere in the document

// 2. Change the text of the h1 that displays the page title when someone clicks anywhere in the page

// 3. Display an alert when someone clicks any of the tasks


var tasks = document.querySelectorAll('.task');
for (var index = 0; index < tasks.length; index++) {
    tasks[index].addEventListener("click", function(){
        alert("Task Clicked!");
    }
    
    
    )
}


// 4a. Write a function that displays an alert

function displayAlert() {
    alert("Alerted!");
}

// 4b. Run the function only when any task is clicked

var tasks = document.querySelectorAll('.task');
for (var index = 0; index < tasks.length; index++) {
    tasks[index].addEventListener("click", displayAlert);
}

// Now let's get the application to do what it needs to do
// Write a function that updates the counter based on which tasks are completed

function updateCounter() {
   var tasks = document.querySelectorAll('.task');
   var completedTasks = document.querySelectorAll('.is-complete');
   var countTasksRemaining = tasks.length - completedTasks.length;
   document.querySelector('#counter').innerHTML = countTasksRemaining;
   
}


// Run the function you just wrote to update the counter

updateCounter();

// Add an event listener to each of the tasks which will toggle the 'is-complete' css class when clicked


var tasks = document.querySelectorAll('.task');

for (var index = 0; index < tasks.length; index++) {
    tasks[index].addEventListener("click", function() {
        this.classList.toggle("is-complete");
        updateCounter();
})


}

