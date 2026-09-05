// Get the button and message
const button = document.getElementById("clickButton");
const message = document.getElementById("message");

// Add click event
button.addEventListener("click", () => {
    message.textContent = "Hello! JavaScript is working 🎉";
});


// ES6 Arrow Function
const greet = (name) => {
    return `Hello, ${name}!`;
};

console.log(greet("Nethravathi"));


// Array
const marks = [80, 75, 90, 85, 95];

// map()
const newMarks = marks.map(mark => mark + 5);
console.log("New Marks:", newMarks);

// filter()
const highMarks = marks.filter(mark => mark >= 85);
console.log("High Marks:", highMarks);

// reduce()
const totalMarks = marks.reduce((total, mark) => total + mark, 0);
console.log("Total Marks:", totalMarks);


// Destructuring
const student = {
    name: "Nethravathi",
    course: "BCA",
    cgpa: 8.09
};

const { name, course, cgpa } = student;

console.log(name);
console.log(course);
console.log(cgpa);