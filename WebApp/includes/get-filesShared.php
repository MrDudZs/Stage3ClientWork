<?php
// Connection
include 'php/config.php';

// Check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

// Retrieve staffid from session
$staffid = $_SESSION['staffid'] ?? '';

// Query to retrieve files shared with the logged-in user
$sql = "SELECT uploaded_docs.doc_id, uploaded_docs.doc_name, uploaded_docs.doc_severity, uploaded_docs.upload_date
FROM uploaded_docs
INNER JOIN document_access ON uploaded_docs.doc_id = document_access.doc_id
WHERE document_access.staff_id = '$staffid'
";

$result = $conn->query($sql);

// Check if there are any files shared with the user
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["doc_name"] . "</td>";
        echo "<td>" . $row["doc_severity"] . "</td>";
        echo "<td>" . $row["upload_date"] . "</td>";
        echo "<td><button onclick=\"accessFile('" . $row['doc_id'] . "')\">Access</button></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No shared files found.</td></tr>";
}

// Close connection
$conn->close();

