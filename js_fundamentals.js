// Function 1: Arrow function
const addNumbers = (a, b) => {
    return a + b;
};

console.log("Addition:", addNumbers(10, 20));

// Function 2: Default parameter
const greetUser = (name = "Student") => {
    return `Hello, ${name}!`;
};

console.log(greetUser());
console.log(greetUser("Nethravathi"));

// Function 3: Rest parameter
const calculateSum = (...numbers) => {
    return numbers.reduce((total, number) => total + number, 0);
};

console.log("Total:", calculateSum(10, 20, 30, 40));

// Function 4: Spread operator
const numbers1 = [1, 2, 3];
const numbers2 = [4, 5, 6];

const allNumbers = [...numbers1, ...numbers2];

console.log("Combined array:", allNumbers);

// Function 6: Object and arrow function
const displayStudent = (student) => {
    return `Name: ${student.name}, Course: ${student.course}`;
};

const student = {
    name: "Nethravathi",
    course: "BCA"
};

console.log(displayStudent(student));

// Function 7: Array filter()
const getEvenNumbers = (numbers) => {
    return numbers.filter(number => number % 2 === 0);
};

console.log("Even numbers:", getEvenNumbers([1, 2, 3, 4, 5, 6]));

// Function 8: Promise
const checkData = () => {
    return new Promise((resolve, reject) => {
        const dataAvailable = true;

        if (dataAvailable) {
            resolve("Data received successfully!");
        } else {
            reject("Data could not be received.");
        }
    });
};

checkData()
    .then(result => console.log(result))
    .catch(error => console.log(error));

    // Function 9: Object destructuring
const showStudentDetails = (student) => {
    const { name, course, year } = student;

    return `Name: ${name}, Course: ${course}, Year: ${year}`;
};

const studentDetails = {
    name: "Nethravathi",
    course: "BCA",
    year: 3
};

console.log(showStudentDetails(studentDetails));

// Function 10: Object spread operator
const updateStudent = (student, newCourse) => {
    return {
        ...student,
        course: newCourse
    };
};

const updatedStudent = updateStudent(
    { name: "Nethravathi", course: "BCA" },
    "Data Science"
);

console.log("Updated student:", updatedStudent);

// API Call: JSONPlaceholder
fetch("https://jsonplaceholder.typicode.com/users")
    .then(response => response.json())
    .then(data => {
        console.log("Users from API:", data);
    })
    .catch(error => {
        console.log("Error fetching data:", error);
    });

    // Async/Await with try/catch
const getUsers = async () => {
    try {
        const response = await fetch("https://jsonplaceholder.typicode.com/users");

        if (!response.ok) {
            throw new Error("Failed to fetch users");
        }

        const data = await response.json();

        console.log("Users using async/await:", data);
    } catch (error) {
        console.log("Error:", error.message);
    }
};

getUsers();