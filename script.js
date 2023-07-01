// Sample data for users
const users = [
    { id: 1, name: 'John Doe', email: 'john@example.com', status: 'Active' },
    { id: 2, name: 'Jane Smith', email: 'jane@example.com', status: 'Active' },
    { id: 3, name: 'Mike Johnson', email: 'mike@example.com', status: 'Blocked' },
    { id: 4, name: 'Emily Brown', email: 'emily@example.com', status: 'Active' },
];

// Function to display users in the table
function displayUsers() {
    const tableBody = document.getElementById('userTableBody');
    tableBody.innerHTML = '';

    users.forEach(user => {
        const row = `
            <tr>
                <td>${user.id}</td>
                <td>${user.name}</td>
                <td>${user.email}</td>
                <td>${user.status}</td>
                <td><button onclick="toggleStatus(${user.id})">${user.status === 'Active' ? 'Block' : 'Unblock'}</button></td>
            </tr>
        `;
        tableBody.insertAdjacentHTML('beforeend', row);
    });
}

// Function to toggle user status (Active/Blocked)
function toggleStatus(userId) {
    const user = users.find(user => user.id === userId);
    if (user) {
        user.status = user.status === 'Active' ? 'Blocked' : 'Active';
        displayUsers();
    }
}

// Initial display of users
displayUsers();
