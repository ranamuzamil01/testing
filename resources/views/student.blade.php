{{-- @include('home'); --}}

<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}/student">Register Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('view') }}">View Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Edit Data</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- // form section start// --}}
    <div class="container my-5">
        {{ $title }}
        <form action="{{ $url }}" method="post">
            @csrf
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                    value="{{ $student->name ?? old('name') }}" />
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email"
                    value="{{ $student->email ?? old('email') }}" />
            </div>
            <div class="form-group">
                <label>Class:</label>
                <input type="text" class="form-control" id="class" name="class" placeholder="Enter your class"
                    value="{{ $student->class ?? old('class') }}" />
            </div>
            <div class="form-group">
                <label>Gender:</label>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check" name="gender" value="M"  {{ $student->gender == 'M' ? "checked" : '' }}/>
                    <label for="" class="form-check">
                        Male
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check" name="gender" value="F" {{ $student->gender == 'F' ? "checked" : '' }} />
                    
                    <label for="" class="form-check">
                        Female
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check" name="gender" value="O" {{ $student->gender == 'O' ? "checked" : '' }} /> 
                    <label for="" class="form-check">
                        Other
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" id="address" name="address"
                    placeholder="Enter your address" value="{{ $student->address ?? old('address') }}" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>
