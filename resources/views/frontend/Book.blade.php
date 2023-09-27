<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <!-- Add Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">All Books</h2>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Book Name</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Status</th>
                    <th>Edit</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->category->name}}</td>
                    <td>{{$book->auther->name}}</td>
                    <td>{{$book->publisher->name}}</td>
                    <td>
                        @if ($book->status == 'Y')
                        <span class='badge badge-success'>Available</span>
                        @else
                        <span class='badge badge-danger'>Issued</span>
                        @endif
                    </td>
                    <td>
                        <button class="btn btn-success edit-status" data-book-id="{{$book->id}}">Edit Status</button>
                    </td>

                </tr>
                @endforeach


                <!-- Add more rows here as needed -->
            </tbody>
        </table>
        <!-- The Modal -->
        <div class="modal" id="editStatusModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Status</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form id="statusForm" action="{{ route('books.updateStatus') }}" method="post">
                            @csrf
                            <!-- Rest of the form fields -->
                            <input type="hidden" id="bookId" name="bookId" value="">
                            <!-- Add more fields for editing status here -->
                            <div class="form-group">
                                <label for="newStatus">New Status:</label>
                                <select class="form-control" id="newStatus" name="newStatus">
                                    <option value="Y">Available</option>
                                    <option value="N">Issued</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>


                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Add Bootstrap JS and jQuery Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Add this script after your Bootstrap scripts -->
    <script>
        $(document).ready(function() {
            // Handle the "Edit Status" button click event
            $(".edit-status").click(function() {
                // Get the book ID from the data-book-id attribute
                var bookId = $(this).data("book-id");

                // Populate the modal with the book ID and status edit form
                $("#bookId").val(bookId);
                // You can add more fields for editing status here

                // Show the modal
                $("#editStatusModal").modal("show");
            });
        });
    </script>



</body>

</html>
