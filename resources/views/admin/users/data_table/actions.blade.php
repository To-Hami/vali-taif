@if (auth()->user()->hasPermission('update_users'))
    <a href="{{ route('admin.users.edit', $id) }}" class="btn btn-warning btn-sm"   style="background-color: #0C6476 !important; color: white !important; border: none !important;" ><i class="fa fa-edit"></i> @lang('site.edit')</a>
@endif

@if (auth()->user()->hasPermission('delete_users'))
    <form action="{{ route('admin.users.destroy', $id) }}" class="my-1 my-xl-0" method="post" style="display: inline-block;">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger btn-sm delete"  style="background-color: #FF6162 !important; color: white !important; border: none !important;"><i class="fa fa-trash"></i> @lang('site.delete')</button>
    </form>
@endif
