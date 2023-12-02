<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<main>
    <br><br>
    <h1 class="title">TODO-List</h1>

    <div class="container">
        <form action="{{ route('stores') }}" method="post">
            @csrf
            <div class="inputs">
                <input class="task" type="text" name="task" placeholder="Add Task"> <br><br>
                <input class="submit" name="submit" type="submit" value="Submit">
                <div id="tasks" class="tasks">
                        <p>-  <i id="icons" class="fa fa-trash"></i></p>
                </div>
            </div>
        </form>
    </div>
</main>
</body>
</html>

