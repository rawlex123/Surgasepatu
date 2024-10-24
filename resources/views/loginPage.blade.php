<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Surga Sepatu</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body,
    html {
        height: 100%;
        background-repeat: no-repeat;
        background: black;
        position: relative;
        background-image: url('image/sepatu.jpg');
        background-size: cover;
        background-position: center;
        font-family: 'Montserrat', sans-serif;
    }

    .card img {
        display: block;
        margin: 0 auto 15px;
        max-width: 120px;
        height: auto;
    }
</style>

<body>

    <div class="container mt-5 d-flex justify-content-center">
        <div class="card bg-light" style="width: 25rem; height: 35rem;">
            <div class="card-body text-center">
                <img src="{{ asset('image/logo.jpg')}}" alt="Surga Sepatu Logo">
                <h5 class="card-title mb-4">Login</h5>
                <form>
                    <div class="form-group text-left">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">

                    </div>
                    <div class="form-group text-left">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check text-left">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-2">Login</button>
                    <button type="button" class="btn btn-outline-secondary btn-block">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>