const taskInput = document.querySelector("#taskInput");
const addButton = document.querySelector("#addButton");
const taskList = document.querySelector("#taskList");

// Get tasks from localStorage
let tasks = JSON.parse(localStorage.getItem("tasks")) || [];

// Display tasks
const displayTasks = () => {
    taskList.innerHTML = "";

    tasks.forEach((task, index) => {
        const li = document.createElement("li");
        li.classList.add("task-item");

        if (task.completed) {
            li.classList.add("completed");
        }

        const span = document.createElement("span");
        span.textContent = task.text;

        const deleteButton = document.createElement("button");
        deleteButton.classList.add("delete-button");
        deleteButton.textContent = "Delete";
        deleteButton.dataset.index = index;

        li.appendChild(span);
        li.appendChild(deleteButton);

        taskList.appendChild(li);
    });
};

// Add a new task
addButton.addEventListener("click", () => {
    const taskText = taskInput.value.trim();

    if (taskText === "") {
        return;
    }

    tasks.push({
        text: taskText,
        completed: false
    });

    localStorage.setItem("tasks", JSON.stringify(tasks));

    taskInput.value = "";

    displayTasks();
});

// Event delegation
taskList.addEventListener("click", (event) => {

    // Delete task
    if (event.target.classList.contains("delete-button")) {
        const index = event.target.dataset.index;
        const taskItem = event.target.parentElement;

        tasks.splice(index, 1);

        taskList.removeChild(taskItem);

        localStorage.setItem("tasks", JSON.stringify(tasks));
    }

    // Complete task
    if (event.target.tagName === "SPAN") {
        const taskItem = event.target.parentElement;
        const index = Array.from(taskList.children).indexOf(taskItem);

        tasks[index].completed = !tasks[index].completed;

        localStorage.setItem("tasks", JSON.stringify(tasks));

        displayTasks();
    }
});

// Display saved tasks when page loads
displayTasks();