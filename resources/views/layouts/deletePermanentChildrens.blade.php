@if(Auth::user()->user_type == 'Admin')
<form action="{{ route('admin.childrens.deletePermanentChildren', $children->id) }}" method="POST" id="deleteForm_{{ $children->id }}">
@elseif(Auth::user()->user_type == 'Staff')
<form action="{{ route('staff.childrens.deletePermanentChildren', $children->id) }}" method="POST" id="deleteForm_{{ $children->id }}">
@endif
    @csrf
    @method('DELETE')

    <!-- Bootstrap 5 Button with Modal Trigger -->
    <a type="button"  data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $children->id }}">
        <i class="fas fa-trash-alt" style="color: #dc3545;"></i>
    </a>

    <!-- Bootstrap 5 Modal -->
    <div class="modal fade" id="deleteModal_{{ $children->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
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
                    <button type="submit" class="btn btn-danger" onclick="confirmDelete('{{ $children->id }}')">Confirm
                        Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>