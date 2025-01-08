
@section('title', 'Signup')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="card">
        <h1 class="title">Signup</h1>
        <form>
            <input type="text" placeholder="Username or Email" class="input-field">
            <input type="password" placeholder="Password" class="input-field">
            <input type="password" placeholder="Confirm Password" class="input-field">
            <button type="submit" class="btn-login">Signup</button>
        </form>
    </div>
</body>
</html>
