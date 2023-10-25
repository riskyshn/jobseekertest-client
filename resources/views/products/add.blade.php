<!-- Simple form to add product data -->
<h2>Add Product</h2>
<form class="product-form" action="{{ route('users.store') }}" method="post">
    @csrf
    <label for="full_name">Full Name:</label>
    <br>
    <input class="input-field" type="text" name="full_name" required>
    <br>

    <label for="dob">Date of Birth:</label>
    <br>
    <input class="input-field" type="date" name="dob" step="0.01" required>
    <br>

    <label for="pob">Place of Birth:</label>
    <br>
    <input class="input-field" type="text" name="pob" required>
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
    <input class="input-field" type="text" name="years_exp" required>
    <br>

    <label for="phone_number">Phone Number:</label>
    <br>
    <input class="input-field" type="text" name="phone_number" required>
    <br>

    <label for="email">Email:</label>
    <br>
    <input class="input-field" type="text" name="email" required>
    <br>

    <button class="submit-button" type="submit">Add User</button>
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
