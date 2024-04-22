<?php
// Connection
include 'php/config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user is logged in
if (isset($_SESSION['staffid'])) {
    $currentUserId = $_SESSION['staffid'];

    // Query to retrieve all files from the uploaded_docs table along with owner information
    $sql = "SELECT u.doc_id, u.doc_name, u.doc_severity, u.upload_date, s.first_name, s.surname, u.staff_id
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
        
            // Check if the document is owned by the current user
            if ($row["staff_id"] != $currentUserId) {
                $doc_id = $row["doc_id"];
                $check_access_query = "SELECT * FROM document_access WHERE doc_id = $doc_id AND staff_id = $currentUserId";
                $check_access_result = $conn->query($check_access_query);
        
                if ($check_access_result->num_rows > 0) {
                    echo "<td>Shared</td>";
                } else {
                    $check_pending_query = "SELECT * FROM request_access WHERE doc_id = $doc_id AND staffid = $currentUserId AND status = 'Pending'";
                    $check_pending_result = $conn->query($check_pending_query);
        
                    if ($check_pending_result->num_rows > 0) {
                        echo "<td>Request Pending</td>";
                    } else {
                        echo "<td><a href='request-access.php?doc_id=" . $row["doc_id"] . "'>Request Access</a></td>";
                    }
                }
            } else {
                echo "<td>Owned</td>";
            }
        
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>No files found.</td></tr>";
    }
} else {
    // Redirect user to login page if not logged in
    header("Location: login.php");
    exit;
}

// Close connection
$conn->close();
