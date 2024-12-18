<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHA-256 Hash Encoder</title>
        
    <style>
        input{
            display: block;
            width: 90vw;
            height: 40px;
            font-size: 1.1rem;
        }

        p{
            border-radius: 12px 12px 0 0;
            border-style: solid;
            border-width: 2px 2px 0;
            border-color: #aaa;
            margin-bottom: 4px;
            padding: 6px;
        }

        button {
            border-radius: 4px;
            transition: all 0.4s ease;
            border: 2px solid #777;
            background-color: #ccc;
            padding: 8px 4px;
        }
        
        button.success {
            border: 2px solid #19792f;
            background-color: #28a745;
        }

        button + p{
            margin-top: 20px;
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

            // Display the full hash
            document.getElementById('fullHash').textContent = hashHex;

            // Display the cropped hash versions
            document.getElementById('croppedHash40').textContent = hashHex.substring(0, 40);
            document.getElementById('croppedHash30').textContent = hashHex.substring(0, 30);
            document.getElementById('croppedHash28').textContent = hashHex.substring(0, 28);
            document.getElementById('croppedHash23').textContent = hashHex.substring(0, 23);
            document.getElementById('croppedHash20').textContent = hashHex.substring(0, 20);
            document.getElementById('croppedHash13').textContent = hashHex.substring(0, 13);
        }

        function copyToClipboardFull() {
            // Get the content of the <p> element
            const fullHash = document.getElementById('fullHash').textContent;

            // Create a temporary textarea element
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = fullHash;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea element
            document.body.removeChild(tempTextarea);

            // Provide feedback to the user
            const button = document.getElementById('copyButtonFull');
            button.classList.add('success');
            setTimeout(() => {
                button.classList.remove('success');
            }, 1000); // Remove the class after 1 seconds
        }

        function copyToClipboard40() {
            // Get the content of the <p> element
            const fullHash = document.getElementById('croppedHash40').textContent;

            // Create a temporary textarea element
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = fullHash;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea element
            document.body.removeChild(tempTextarea);

            // Provide feedback to the user
            const button = document.getElementById('copyButton40');
            button.classList.add('success');
            setTimeout(() => {
                button.classList.remove('success');
            }, 1000); // Remove the class after 1 seconds
        }

        function copyToClipboard30() {
            // Get the content of the <p> element
            const fullHash = document.getElementById('croppedHash30').textContent;

            // Create a temporary textarea element
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = fullHash;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea element
            document.body.removeChild(tempTextarea);

            // Provide feedback to the user
            const button = document.getElementById('copyButton30');
            button.classList.add('success');
            setTimeout(() => {
                button.classList.remove('success');
            }, 1000); // Remove the class after 1 seconds
        }

        function copyToClipboard28() {
            // Get the content of the <p> element
            const fullHash = document.getElementById('croppedHash28').textContent;

            // Create a temporary textarea element
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = fullHash;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea element
            document.body.removeChild(tempTextarea);

            // Provide feedback to the user
            const button = document.getElementById('copyButton28');
            button.classList.add('success');
            setTimeout(() => {
                button.classList.remove('success');
            }, 1000); // Remove the class after 1 seconds
        }

        function copyToClipboard23() {
            // Get the content of the <p> element
            const fullHash = document.getElementById('croppedHash23').textContent;

            // Create a temporary textarea element
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = fullHash;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea element
            document.body.removeChild(tempTextarea);

            // Provide feedback to the user
            const button = document.getElementById('copyButton23');
            button.classList.add('success');
            setTimeout(() => {
                button.classList.remove('success');
            }, 1000); // Remove the class after 1 seconds
        }

        function copyToClipboard20() {
            // Get the content of the <p> element
            const fullHash = document.getElementById('croppedHash20').textContent;

            // Create a temporary textarea element
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = fullHash;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea element
            document.body.removeChild(tempTextarea);

            // Provide feedback to the user
            const button = document.getElementById('copyButton20');
            button.classList.add('success');
            setTimeout(() => {
                button.classList.remove('success');
            }, 1000); // Remove the class after 1 seconds
        }

        function copyToClipboard18() {
            // Get the content of the <p> element
            const fullHash = document.getElementById('croppedHash18').textContent;

            // Create a temporary textarea element
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = fullHash;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea element
            document.body.removeChild(tempTextarea);

            // Provide feedback to the user
            const button = document.getElementById('copyButton18');
            button.classList.add('success');
            setTimeout(() => {
                button.classList.remove('success');
            }, 1000); // Remove the class after 1 seconds
        }

        window.onload = function() {
          document.getElementById("inputString").focus();
        };

        function copyToClipboard13() {
            // Get the content of the <p> element
            const fullHash = document.getElementById('croppedHash13').textContent;

            // Create a temporary textarea element
            const tempTextarea = document.createElement('textarea');
            tempTextarea.value = fullHash;
            document.body.appendChild(tempTextarea);

            // Select and copy the text
            tempTextarea.select();
            document.execCommand('copy');

            // Remove the temporary textarea element
            document.body.removeChild(tempTextarea);

            // Provide feedback to the user
            const button = document.getElementById('copyButton13');
            button.classList.add('success');
            setTimeout(() => {
                button.classList.remove('success');
            }, 1000); // Remove the class after 1 seconds
        }

        window.onload = function() {
          document.getElementById("inputString").focus();
        };
    </script>
</head>
<body>
    <h1>SHA-256 Hash Encoder</h1>
    <form onsubmit="event.preventDefault(); encodeToSHA256();">
        <label for="inputString">Enter string:</label>
        <input type="text" id="inputString" required>
        <button type="submit">Encode</button>
    </form>    
    
    <p><strong>SHA-256:</strong> <span id="fullHash"></span></p>
    <button id="copyButtonFull" onclick="copyToClipboardFull()">Copy Text</button>

    <p><strong>Hash 40:</strong> <span id="croppedHash40"></span></p>
    <button id="copyButton40" onclick="copyToClipboard40()">Copy Text</button>

    <p><strong>Hash 30:</strong> <span id="croppedHash30"></span></p>
    <button id="copyButton30" onclick="copyToClipboard30()">Copy Text</button>

    <p><strong>Hash 28:</strong> <span id="croppedHash28"></span></p>
    <button id="copyButton28" onclick="copyToClipboard28()">Copy Text</button>

    <p><strong>Hash 23:</strong> <span id="croppedHash23"></span></p>
    <button id="copyButton23" onclick="copyToClipboard23()">Copy Text</button>

    <p><strong>Hash 20:</strong> <span id="croppedHash20"></span></p>
    <button id="copyButton20" onclick="copyToClipboard20()">Copy Text</button>

    <p><strong>Hash 18:</strong> <span id="croppedHash18"></span></p>
    <button id="copyButton18" onclick="copyToClipboard18()">Copy Text</button>

    <p><strong>Hash 13:</strong> <span id="croppedHash13"></span></p>
    <button id="copyButton13" onclick="copyToClipboard13()">Copy Text</button>
</body>
</html>
