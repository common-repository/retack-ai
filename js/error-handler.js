window.addEventListener('error', function(event) {
    var errorTitle = event.message || 'JavaScript Error'; // Error title
    var stackTrace = event.error ? event.error.stack : ''; // Stack trace

    var errorDetails = {
        title: errorTitle, // Error title
        stack_trace: stackTrace // Stack trace
    };

    // Use the localized AJAX URL
    fetch(retack_ajax.ajax_url + '?action=retack_log_js_error', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(errorDetails)
    }).then(response => {
        if (!response.ok) {
            console.error('Error sending error details to server');
        } else {
            console.log('Error details sent successfully');
        }
    }).catch(error => {
        console.error('Fetch error: ', error);
    });
});
