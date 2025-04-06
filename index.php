<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Art Life Developing</title>
    <style>
        body {
            background-color: black;
            color: #00ff00;
            font-family: 'Courier New', Courier, monospace;
            overflow: hidden;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .matrix {
            white-space: nowrap;
            font-size: 20px;
            line-height: 1.5;
            position: absolute;
            top: 0;
            left: 0;
        }

        .falling {
            display: inline-block;
            opacity: 0;
            animation: fall linear infinite forwards;
        }

        @keyframes fall {
            0% { transform: translateY(-100%); opacity: 1; }
            100% { transform: translateY(100vh); opacity: 0; }
        }
    </style>
</head>
<body>
    <div class="matrix">
        <?php
        // Define characters to be displayed
        $characters = ['IT', 'ART', 'LIFE', 'SOFTWARE', 'PROFESSIONAL', 'DEVELOPMENT'];

        // Generate matrix effect
        for ($i = 0; $i < 14 * 12; $i++) {
            $duration = rand(3, 10); // Random duration for each character
			
            echo '<span class="falling" style="animation-duration: ' . $duration . 's; animation-delay: ' . rand(0, 5) . 's;">';
            echo $characters[array_rand($characters)];
            echo '</span>';
        }
        ?>
    </div>
</body>
</html>

