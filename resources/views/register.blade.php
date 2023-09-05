@extends('layouts.main')

@section('main-section')
    <h1>Register</h1>

    <div class="container text-center ">

        <main class=" form-signup">
            <form method="post" action="{{url('/')}}/register">
                @csrf
                <img class=" logo" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class=" heading">Create an Account</h1>
        
                <div class=" form-floating">
                    <input name="name" type="text" class=" form-control" id=" name" placeholder="Full Name" required>
                    <label for=" name">Full Name</label>
                </div>
                
                <div class=" form-floating">
                    <input name="email" type="email" class=" form-control" id=" email" placeholder="name@example.com" required>
                    <label for=" email">Email Address</label>
                </div>
                
                        
                <div class=" form-floating">
                    <input name="address" type="text" class=" form-control" id=" address" placeholder="Address" required>
                    <label for=" address">Address</label>
                </div>
        
                <div class=" form-floating">
                    <input name="city" type="text" class=" form-control" id=" city" placeholder="City" required>
                    <label for=" city">City</label>
                </div>
        
                <div class=" form-floating">
                    <input name="state" type="text" class=" form-control" id=" state" placeholder="State" required>
                    <label for=" state">State</label>
                </div>
        
                <div class=" form-floating">
                    <select name="gender" class=" form-control" id=" gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">Other</option>
                    </select>
                    <label for=" gender">Gender</label>
                </div>
        
                
        
                <button class=" btn btn-primary" type="submit">Register</button>
                
            </form>
        </main>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection
