<?php
session_start();
include '../php/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $docId = $_POST['doc_id'];

    // Delete related records from the request_access table
    $sqlDeleteRequestAccess = "DELETE FROM request_access WHERE doc_id = '$docId'";
    if ($conn->query($sqlDeleteRequestAccess) === TRUE) {
        // Now delete related records from the document_access table
        $sqlDeleteDocumentAccess = "DELETE FROM document_access WHERE doc_id = '$docId'";
        if ($conn->query($sqlDeleteDocumentAccess) === TRUE) {
            // Finally, delete the file from the uploaded_docs table
            $sqlDeleteFile = "DELETE FROM uploaded_docs WHERE doc_id = '$docId'";
            if ($conn->query($sqlDeleteFile) === TRUE) {
                echo "File deleted successfully";
            } else {
                echo "Error deleting file: " . $conn->error;
            }
        } else {
            echo "Error deleting document access: " . $conn->error;
        }
    } else {
        echo "Error deleting request access: " . $conn->error;
    }
}
?>
