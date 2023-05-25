<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>

        <link rel="stylesheet" href="{{asset('css/register.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="contain">
            <h1 id="heading">WELCOME NEW USERS</h1>

            <form action="{{route('create-user')}}" method="post">
                @csrf

                <div>
                    <select name="role" id="dropdown">
                        <option value="1">Idea Creator</a></option>
                        <option value="2">Investor</a></option>
                    </select>
                </div>

                <div>
                    <label>Name:</label>
                    <input type="text" class="input-box" id="name" name="name" value="{{old('name')}}">

                    @error('name')
                        <p>{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <label>Email:</label>
                    <input type="text" class="input-box" id="email" name="email" value="{{old('email')}}">

                    @error('email')
                        <p>{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <label>Password:</label>
                    <input type="password" class="input-box" id="pass" name="password">
                </div>

                <div>
                    <label>Re-Enter Password:</label>
                    <input type="password" class="input-box" id="pass2" name="password_confirmation">

                    @error('password')
                        <p>{{$message}}</p>
                    @enderror
                </div>

                <input type="submit" value="Join Now" class="button"> 
            </form>

            <a href="{{route('login')}}">Already a member? Login</a>
        </div>
    </body>
</html>
