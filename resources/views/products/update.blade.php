<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobseeker Company Test</title>
    <!-- Add these lines within the <head> section of your layout file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    @include('layouts.style')
</head>
<body>
<h2>Edit User</h2>
<form action="{{ route('users.update', ['userId' => $user['id']]) }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="full_name">Full Name:</label>
    <br>
    <input class="input-field" value="{{$user['full_name']}}"  type="text" name="full_name" required>
    <br>

    <label for="dob">Date of Birth:</label>
    <br>
    <input class="input-field" type="date" value="{{$user['dob']}}" name="dob" step="0.01" required>
    <br>

    <label for="pob">Place of Birth:</label>
    <br>
    <input class="input-field" value="{{$user['pob']}}" type="text" name="pob" required>
    <br>

    <label for="gender">Gender:</label>
    <br>
    <select class="input-field" name="gender" required>
        <option value="M">M</option>
        <option value="F">F</option>
    </select>
    <br>

    <label for="years_exp">Years of Experience:</label>
    <br>
    <input class="input-field" type="text" value="{{$user['years_exp']}}" name="years_exp" required>
    <br>

    <label for="phone_number">Phone Number:</label>
    <br>
    <input class="input-field" type="text" value="{{$user['phone_number']}}" name="phone_number" required>
    <br>

    <label for="email">Email:</label>
    <br>
    <input class="input-field" type="text" value="{{$user['email']}}" name="email" required>
    <br>

    <button class="submit-button" type="submit">Edit User</button>
</form>
<script>
    $(document).ready(function() {
    // Check for success flash message and display SweetAlert2 popup
    var successMessage = "{{ session('success') }}";
    if (successMessage) {
        Swal.fire({
            title: 'Success!',
            text: successMessage,
            icon: 'success',
            confirmButtonText: 'OK'
        });
    }

    // Rest of your JavaScript code...
});
</script>

    </div>
    @include('layouts.js')
</body>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        // Hide the add product section initially
        $('#addProductSection').hide();

        // Toggle the add product section when the button is clicked
        $('#toggleButton').click(function() {
            $('#addProductSection').toggle();
        });
    });
</script>
</html>

