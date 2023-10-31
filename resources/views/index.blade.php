
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <Title>Homepage</title>
</head>
<body>
    <!-- <img src="{{ asset('images/purple.jpg') }}" alt="Example Image"> -->
    <div class="header-container">
        <h1>USER REGISTRATION</h1>
    </div>
    <div class="form-container">
        <form method="POST" action="/signup">
            @csrf
            <label>Name:</label>
            <input type="text" name="name" placeholder="Name"><br>
            <label>Email ID:</label>
            <input type="email" name="email" placeholder="Email"><br>
            <label>Phone No:</label>
            <input type="text" name="phone_no" placeholder="Phone no"><br>
            <label>place:</label>
            <input type="text" name="place" placeholder="Place"><br>
            <button type="submit">Submit</button>
        </form>
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
    </div>
</body>
</html>
