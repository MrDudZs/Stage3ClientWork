<?php
// Connection
include 'php/config.php';

// Check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

// Query to retrieve pending records
$sql = "SELECT doc_name, doc_class, due_date, doc_owner, department, role, doc_severity FROM uploaded_docs WHERE file_status = 0";
$result = $conn->query($sql);

// Check if there are any pending records
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr class='pendingRec-tr'>";
        echo "<td class='pendingRec-td'>" . $row["doc_name"] . "</td>";
        echo "<td class='pendingRec-td'>" . $row["doc_class"] . "</td>";
        echo "<td class='pendingRec-td'>" . $row["due_date"] . "</td>";
        echo "<td class='pendingRec-td'>" . $row["doc_owner"] . "</td>";
        echo "<td class='pendingRec-td'>" . $row["department"] . "</td>";
        echo "<td class='pendingRec-td'>" . $row["role"] . "</td>";
        echo "<td class='pendingRec-td'>" . $row["doc_severity"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No pending records found.</td></tr>";
}

// Close connection
$conn->close();