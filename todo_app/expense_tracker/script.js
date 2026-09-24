const descriptionInput = document.querySelector("#description");
const amountInput = document.querySelector("#amount");
const typeInput = document.querySelector("#type");
const addButton = document.querySelector("#addButton");
const transactionList = document.querySelector("#transactionList");

const balanceDisplay = document.querySelector("#balance");
const incomeDisplay = document.querySelector("#income");
const expensesDisplay = document.querySelector("#expenses");

// Get saved transactions
let transactions = JSON.parse(localStorage.getItem("transactions")) || [];

// Display transactions
const displayTransactions = () => {
    transactionList.innerHTML = "";

    let income = 0;
    let expenses = 0;

    transactions.forEach((transaction, index) => {

        if (transaction.type === "income") {
            income += transaction.amount;
        } else {
            expenses += transaction.amount;
        }

        const li = document.createElement("li");
        li.classList.add("transaction", transaction.type);

        const info = document.createElement("div");
        info.classList.add("transaction-info");

        const description = document.createElement("span");
        description.textContent = transaction.description;

        const amount = document.createElement("span");
        amount.classList.add("transaction-amount");
        amount.textContent =
            transaction.type === "income"
                ? `+₹${transaction.amount}`
                : `-₹${transaction.amount}`;

        const deleteButton = document.createElement("button");
        deleteButton.classList.add("delete-button");
        deleteButton.textContent = "Delete";
        deleteButton.dataset.index = index;

        info.appendChild(description);
        info.appendChild(amount);

        li.appendChild(info);
        li.appendChild(deleteButton);

        transactionList.appendChild(li);
    });

    const balance = income - expenses;

    balanceDisplay.textContent = `₹${balance}`;
    incomeDisplay.textContent = `₹${income}`;
    expensesDisplay.textContent = `₹${expenses}`;
};

// Add transaction
addButton.addEventListener("click", () => {

    const description = descriptionInput.value.trim();
    const amount = Number(amountInput.value);
    const type = typeInput.value;

    if (description === "" || amount <= 0) {
        alert("Please enter a valid description and amount.");
        return;
    }

    transactions.push({
        description: description,
        amount: amount,
        type: type
    });

    localStorage.setItem("transactions", JSON.stringify(transactions));

    descriptionInput.value = "";
    amountInput.value = "";

    displayTransactions();
});

// Event delegation for delete button
transactionList.addEventListener("click", (event) => {

    if (event.target.classList.contains("delete-button")) {

        const index = event.target.dataset.index;

        transactions.splice(index, 1);

        localStorage.setItem("transactions", JSON.stringify(transactions));

        displayTransactions();
    }
});

// Display saved transactions when page loads
displayTransactions();