<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <Title>Homepage</title>
</head>
<body>
    <div class="header-container">
        <h1>WELCOME!</h1>
    </div>
    <div class="table-container">
        <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Place</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registerData as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone_no }}</td>
                <td>{{ $data->place }}</td>
                <td>
                    <form action="{{ route('delete.register', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </div>
        </table>
        <button type="submit" onclick="redirectToTarget()" class="close-btn">Close</button>
    </div>
    @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
