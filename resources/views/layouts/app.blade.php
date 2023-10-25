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
    <h4>Jobseeker Company Laravel Test</h4>
    <button id="toggleButton">Add User</button>
    <div id="addProductSection">
        @include('products.add')
    </div>
    <div>
        @yield('content')
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
