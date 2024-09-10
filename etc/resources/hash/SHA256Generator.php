<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHA-256 Hash Encoder</title>
        
    <style>
        button {
            transition: all 1s ease;
            border: 1px solid #777;
            background-color: #aaa;
        }
        
        button.success {
            border: 1px solid #fff;
            background-color: #28a745;
        }
    </style>
    
    <script>
        async function encodeToSHA256() {
            const input = document.getElementById('inputString').value;
            const encoder = new TextEncoder();
            const data = encoder.encode(input);

            // Hash the data
            const hashBuffer = await crypto.subtle.digest('SHA-256', data);
            const hashArray = Array.from(new Uint8Array(hashBuffer));
            const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');

            // Display the hash
            document.getElementById('textToCopy').textContent = hashHex;
        }
        
        function copyToClipboard() {
            // Get the content of the <p> element
            const textToCopy = document.getElementById('textToCopy').textContent;

            // Create a temporary textarea element
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = textToCopy;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea element
            document.body.removeChild(tempTextarea);

            // Provide feedback to the user
            const button = document.getElementById('copyButton');
            button.classList.add('success');
            setTimeout(() => {
                button.classList.remove('success');
            }, 2000); // Remove the class after 2 seconds
        }
    </script>
</head>
<body>
    <h1>SHA-256 Hash Encoder</h1>
    <form onsubmit="event.preventDefault(); encodeToSHA256();">
        <label for="inputString">Enter string:</label>
        <input type="text" id="inputString" required>
        <button type="submit">Encode</button>
    </form>
    
    <p><strong>SHA-256 Hash:</strong> <span id="textToCopy"></span></p>
    <button id="copyButton" onclick="copyToClipboard()">Copy Text</button>
</body>
</html>
