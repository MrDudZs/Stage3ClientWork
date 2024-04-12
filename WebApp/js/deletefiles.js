function deleteFile(docId) {
    if (confirm('Are you sure you want to delete this file?')) {
        // Send AJAX request to delete file
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'includes/delete-files.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status == 200) {
                alert(xhr.responseText); // Display response message
                // Reload the page
                location.reload();
            }
        };
        xhr.send('doc_id=' + docId);
    }
}
