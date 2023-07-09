<html>

<head>
    <title>Admin</title>
    <style>
        /* ======background of form ======*/
        html {
            --s: 200px;
            --c1: #1d1d1d;
            --c2: #4e4f51;
            --c3: #3c3c3c;
            background: repeating-conic-gradient(from 30deg, #0000 0 120deg, var(--c3) 0 180deg) calc(.5*var(--s)) calc(.5*var(--s)*0.577),
                repeating-conic-gradient(from 30deg, var(--c1) 0 60deg, var(--c2) 0 120deg, var(--c3) 0 180deg);
            background-size: var(--s) calc(var(--s)*0.577);
        }

        * {
            font-size: 20px;
            font-family: sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            color: aliceblue;
            overflow: hidden;
            display: block;
            background: transparent;
            border: none;
        }

        head {
            display: none;
        }

        .background {
            overflow: hidden;
            width: 100%;
            height: 100%;
        }

        .login {
            background: linear-gradient(45deg, rgba(241, 69, 69, 0.527), rgba(107, 219, 107, 0.486));
            height: 400px;
            width: 300px;
            margin: 150px auto;
            border-radius: 25px;
            backdrop-filter: blur(3px);
        }

        .form table {
            height: 100%;
            width: 100%;
        }

        .form td,
        th {
            padding: 15px 35px;
        }

        .form input,
        textarea {
            height: 45px;
            width: 90%;
            outline: none;
            border-bottom: 1px solid #000;
        }

        input::placeholder {
            color: aliceblue;
            padding-left: 15px;
        }


        .form label {
            filter: drop-shadow(3px 3px 3px #000);
            text-transform: uppercase;
        }

        .form button {
            height: 50px;
            background-color: rgb(53, 179, 53);
            width: 50%;
            box-shadow: 3px 3px 10px #000;
            border-radius: 5px;
        }

        .form button:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="login">
            <form class="form" method="post" action="home.php">
                <table border="0">
                    <tr>
                        <th>
                            Login Page
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" placeholder="Email/Username" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" placeholder="Password" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" style="all:revert;"> Sell my data
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2"> <button type="submit" name="login">Log in</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>