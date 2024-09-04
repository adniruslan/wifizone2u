<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="whatsappForm" enctype="multipart/form-data">
    <input type="text" id="phone" name="phone" placeholder="Phone Number" required />
    <input type="file" id="file" name="file" required />
    <button type="submit">Send to WhatsApp</button>
</form>
<script>
    document.getElementById("whatsappForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var phone = document.getElementById("phone").value;
    var fileInput = document.getElementById("file");
    
    // Assuming you have a file upload process here (e.g., uploading to a cloud service)
    // After the file is uploaded, you'll get a shareable link
    
    var fileLink = "https://yourfilelink.com"; // This should be the actual link to the uploaded file
    
    var message = `Here is the file you requested: ${fileLink}`;
    var whatsappURL = `https://api.whatsapp.com/send?phone=${phone}&text=${encodeURIComponent(message)}`;
    
    window.open(whatsappURL, '_blank');
});

</script>
    
</body>
</html>