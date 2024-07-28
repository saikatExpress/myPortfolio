<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
    <section>
        <div>
            @session('message')
                <p>
                    {{ session('message') }}
                </p>
            @endsession
            <form action="{{ url('word/store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Name : </label> <br>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="">Meaning : </label> <br>
                    <input type="text" name="meaning">
                </div>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </section>
</body>
</html>