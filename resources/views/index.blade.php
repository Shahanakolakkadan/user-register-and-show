
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <Title>Register</title>
</head>
<body>
    <div class="header-container">
        <h1>USER REGISTRATION</h1>
    </div>
    <div class="form-container">
        <form id="myForm" method="POST" action="/homepage">
            @csrf
            <!-- <label>Name:</label> -->
            <label for="name">Name: </label>
            <span id="name_error" class="error-message" style="display: none">*This field is required</span>
            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Name"><br>
            @error('name')
                <div class="error-message">*This field is required</div>
            @enderror
            <label for="email">Email ID: </label>
            <span id="email_error" class="error-message" style="display: none">*This field is required</span>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email"><br>
            @error('email')
                <div class="error-message">*This field is required</div>
            @enderror
            <label for="phone_no">Phone No:</label>
            <span id="phone_no_error" class="error-message" style="display: none">*This field is required</span>
            <input type="text" id="phone_no" name="phone_no" value="{{ old('phone_no') }}" placeholder="Phone no">
            @error('phone_no')
                <div class="error-message">*This field is required</div>
            @enderror
            <label for="place">place:</label>
            <span id="place_error" class="error-message" style="display: none">*This field is required</span>
            <input type="text" id="place" name="place" value="{{ old('place') }}" placeholder="Place"><br>
            @error('place')
                <div class="error-message">*This field is required</div>
            @enderror
            <button type="submit">Submit</button>
        </form>
        <!-- <img src="{{ asset('images/purple.jpg') }}" alt="Example Image"> -->
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
