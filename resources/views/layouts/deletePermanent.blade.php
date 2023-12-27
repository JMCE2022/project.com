<form action="{{ route('admin.users.deletePermanent', $user->id) }}" method="POST" id="deleteForm_{{ $user->id }}">
    @csrf
    @method('DELETE')

    <!-- Bootstrap 5 Button with Modal Trigger -->
    <a type="button"  data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $user->id }}">
        <i class="fas fa-trash-alt" style="color: #dc3545;"></i>
    </a>

    <!-- Bootstrap 5 Modal -->
    <div class="modal fade" id="deleteModal_{{ $user->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to permanently delete this user?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" onclick="confirmDelete('{{ $user->id }}')">Confirm
                        Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>