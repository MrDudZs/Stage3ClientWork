<?php
// Connection
include 'php/config.php';

// Check connection
if ($conn->connect_error) {
    die ("connection failed: " . $conn->connect_error);
}

// Retrieve staffid from session
$staffid = $_SESSION['staffid'] ?? '';

// Query to retrieve files owned by the logged-in user
$sql = "SELECT doc_id, doc_name, doc_severity, upload_date FROM uploaded_docs WHERE staff_id = '$staffid'";
$result = $conn->query($sql);

// Check if there are any files owned by the user
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["doc_name"] . "</td>";
        echo "<td>" . $row["doc_severity"] . "</td>";
        echo "<td>" . $row["upload_date"] . "</td>";
        echo "<td><button onclick=\"deleteFile('" . $row['doc_id'] . "')\">Delete</button></td>"; // Delete button
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No files found.</td></tr>";
}

// Close connection
$conn->close();
