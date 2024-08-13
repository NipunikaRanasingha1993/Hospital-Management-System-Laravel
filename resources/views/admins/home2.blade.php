<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<style>

    *{
        padding: 0;
        margin: 0;
    }
    nav{
        width: 100vw;
        background-color: rgb(56, 48, 48);
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;

    }

    h1{
        font-size: 30px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color:whitesmoke
    }

    a{
        font-size: 20px;
        text-decoration: none;
        margin: 10px;
        color: whitesmoke; 
    }

    button{
        font-size: 18px;
        padding: 8px 15px;
        font-weight: bold;
        border-radius: 10px;
        border: none;
        background-color: black;
        color: whitesmoke;
        margin: 0 20px;
    }

</style>
<body>
    <header>
        <nav>
            <div>
                <h1>Dental Clinic</h1>
            </div>

            <div>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Contact</a>
                <a href="">Feedback</a>
            </div>

            <x-app-layout>

            </x-app-layout>

            <div>
                <button>Add</button>
            </div>
        </nav>
    </header>
</body>
</html>
