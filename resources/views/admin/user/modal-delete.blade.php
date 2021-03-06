<div class="modal modal-danger fade" id="deleteUserModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">You sure?</h4>
            </div>
            <div class="modal-body">
                <p>You are about to permanently delete {{ $user->name }}! This means you will also delete all songs the user has submitted.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <form method="post" action="{{ route('admin.users.destroy', ['user' => $user]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script type="application/javascript">
        $(document).ready(function () {
            $('#deleteUser').click(function (event) {
                event.preventDefault();

                $('#deleteUserModal').modal('show');
            });
        })
    </script>
@endpush
