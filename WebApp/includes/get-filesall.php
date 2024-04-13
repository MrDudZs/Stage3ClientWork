<?php
// Connection
include 'php/config.php';

// Check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

// Query to retrieve all files from the uploaded_docs table along with owner information
$sql = "SELECT u.doc_id, u.doc_name, u.doc_severity, u.upload_date, s.first_name, s.surname
        FROM uploaded_docs u
        INNER JOIN staff s ON u.staff_id = s.staffid";
$result = $conn->query($sql);

// Check if there are any files in the table
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["doc_name"] . "</td>";
        echo "<td>" . $row["doc_severity"] . "</td>";
        echo "<td>" . $row["first_name"] . " " . $row["surname"] . "</td>";
        echo "<td>" . $row["upload_date"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No files found.</td></tr>";
}

// Close connection
$conn->close();
