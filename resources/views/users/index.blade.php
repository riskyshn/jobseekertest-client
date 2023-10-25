@extends('layouts.app')

@section('content')

    <h5>Product List</h5>

    @if (count($users) > 0)
        <table class="product-table" id="users-table" class="display">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Full Name</th>
                    <th>Date of Birth</th>
                    <th>Place of Birth</th>
                    <th>Gender</th>
                    <th>Years Experience</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($users as $product)
                    <tr id="row_{{ $product['id'] }}">
                        <td>{{ $i++ }}</td>
                        <td>
                            <span class="view-mode">{{ $product['full_name'] }}</span>
                            <input type="text" class="edit-mode" value="{{ $product['full_name'] }}" style="display:none;" name="product_name">
                        </td>
                        <td>
                            <span class="view-mode">{{ $product['dob'] }}</span>
                            <input type="text" class="edit-mode" value="{{ $product['dob'] }}" style="display:none;" name="product_name">
                        </td>
                        <td>
                            <span class="view-mode">{{ $product['pob'] }}</span>
                            <input type="text" class="edit-mode" value="{{ $product['pob'] }}" style="display:none;" name="product_name">
                        </td>
                        <td>
                            <span class="view-mode">{{ $product['gender'] }}</span>
                            <input type="text" class="edit-mode" value="{{ $product['gender'] }}" style="display:none;" name="product_name">
                        </td>
                        <td>
                            <span class="view-mode">{{ $product['years_exp'] }}</span>
                            <input type="text" class="edit-mode" value="{{ $product['years_exp'] }}" style="display:none;" name="product_name">
                        </td>
                        <td>
                            <span class="view-mode">{{ $product['phone_number'] }}</span>
                            <input type="text" class="edit-mode" value="{{ $product['phone_number'] }}" style="display:none;" name="product_name">
                        </td>
                        <td>
                            <span class="view-mode">{{ $product['email'] }}</span>
                            <input type="text" class="edit-mode" value="{{ $product['email'] }}" style="display:none;" name="product_name">
                        </td>
                        <td>
                            <a class="edit-button" href="{{ route('users.edit', $product['id']) }}">Edit</a>
                            <button class="save-button" data-product-id="{{ $product['id'] }}" style="display:none;" onclick="saveChanges(this)">Save</button>
                            <button class="cancel-button" data-product-id="{{ $product['id'] }}" style="display:none;" onclick="cancelChanges(this)">Cancel</button>
                            <form action="{{ route('users.destroy', ['userId' => $product['id']]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No products available.</p>
    @endif

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Tambahkan SweetAlert2 dan Bootstrap CSS & JS ke dalam header Anda -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- Konten Anda -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $(document).ready(function() {
        // Inisialisasi DataTable
        $('#users-table').DataTable({
            "paging": true,
            "pageLength": 10,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });

        // Menambahkan konfirmasi SweetAlert2 saat menghapus
        $('.delete-button').on('click', function(event) {
            event.preventDefault();
            var form = $(this).closest('form');
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>

@endsection