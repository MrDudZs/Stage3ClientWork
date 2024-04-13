function returnBack(docId){
    if (confirm("Return back?")){
        window.location.href = 'user-files.php?doc_id=' + docId;
    }
}
