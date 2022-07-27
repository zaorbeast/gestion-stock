<!--<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

</head>
<body> -->
    @extends('admin.layout.admin_dash_layout')
    @section('content')


    <section >
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box" >
            <div class="cercle"></div>
            <div class="cercle"></div>
            <div class="container" data-tilt>
                <div class="form" >
                    <h2>Sign Up</h2>
                    <form action="{{url('/creerUtilisateur')}}" method="post">
                        @csrf
                        <div class="tbx">
                            <input type="text" name="name"  placeholder="Full name" required>
                        </div>
                        <div class="tbx">
                            <input type="email" name="email" placeholder="email" required>
                        </div>
                        <div class="tbx">
                            <input type="password" name="password" placeholder="password" required>
                        </div>
                        <div class="tbx">
                            <input type="password" name="passconfirm" placeholder="confirm password">
                        </div>
                        <div class="tbx">
                            <input type="submit" value="Sign Up">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('frontend/js/vanilla-tilt.js')}}"></script>
    @endsection
    <!--
</body>
</html>-->
