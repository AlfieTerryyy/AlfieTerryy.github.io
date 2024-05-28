<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retro PC</title>
    <style>
        /* ASCII art */
        pre {
            font-family: monospace;
            background-color: #000;
            color: #00ff00; /* Green */
            padding: 10px;
            border: 1px solid #00ff00;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Power button */
        .power-button {
            width: 20px;
            height: 20px;
            background-color: #ff0000; /* Red */
            border: 1px solid #000;
            display: inline-block;
            margin-left: 10px;
        }

        /* Retro CLI */
        .cli {
            font-family: monospace;
            background-color: #000;
            color: #00ff00; /* Green */
            padding: 10px;
            border: 1px solid #00ff00;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
        }

        .prompt {
            color: #00ff00; /* Green */
            margin-right: 5px;
        }

        input {
            background-color: transparent;
            border: none;
            outline: none;
            color: #00ff00; /* Green */
            font-family: monospace;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
    // Process user input from CLI
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $userInput = $_POST["user-input"];
        // Process the user input (e.g., display a message)
        echo "User entered: " . htmlspecialchars($userInput);
    }
    ?>

    <pre>
    ┌─────────────────────────────┐
    │                             │
    │   Welcome to Retro PC!      │
    │                             │
    │   C:\>                      │
    │                             │
    └─────────────────────────────┘
    </pre>

    <div class="power-button"></div>

    <form class="cli" method="post">
        <span class="prompt">C:\></span>
        <input type="text" name="user-input" autofocus>
        <input type="submit" value="Enter">
    </form>
</body>
</html>
