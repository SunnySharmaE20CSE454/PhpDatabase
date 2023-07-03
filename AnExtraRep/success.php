<!DOCTYPE html>
<html>

<head>
    <title>Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #3a1c71, #d76d77, #ffaf7b);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .emoji {
            font-size: 100px;
            animation: animateEmoji 2s infinite;
        }

        @keyframes animateEmoji {

            0%,
            20% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60%,
            80% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
            }
        }

        .button-container {
            margin-top: 20px;
            animation: fadeIn 2s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fill-button {
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
            background-color: #ff8a3d;
            border: none;
            border-radius: 25px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            transition: background-color 0.3s ease;
        }

        .fill-button:hover {
            background-color: #ff6b00;
        }

        h1 {
            color: #ffec8b;
            font-size: 32px;
            margin: 20px 0;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        p {
            color: #ffec8b;
            font-size: 18px;
            margin-bottom: 10px;
            text-align: center;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <div class="emoji">😊</div>
    <h1>Submitted Successfully!</h1>
    <p>Click the button below to fill the details again:</p>
    <div class="button-container">
        <button class="fill-button" onclick="location.href='index.php'">Fill Details Again</button>
    </div>
    <br>
</body>

</html>