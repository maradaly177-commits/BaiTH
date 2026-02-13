@extends('layouts.admin')

@section('title', 'Danh sách danh mục')

@section('content')

<div class="container mt-4">

    <h2>Danh sách danh mục</h2>

    {{-- Thông báo thành công --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Nút thêm --}}
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">
        Thêm danh mục
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Trạng thái</th>
                <th width="200">Hành động</th>
            </tr>
        </thead>

        <tbody>

        @forelse($categories as $category)

            <tr>
                <td>{{ $category->id }}</td>

                <td>{{ $category->name }}</td>

                <td>{{ $category->description }}</td>

                <td>
                    @if($category->is_active)
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                </td>

                <td>

                    <a href="{{ route('categories.show', $category->id) }}"
                       class="btn btn-info btn-sm">
                        Xem
                    </a>

                    <a href="{{ route('categories.edit', $category->id) }}"
                       class="btn btn-warning btn-sm">
                        Sửa
                    </a>

                    <form action="{{ route('categories.destroy', $category->id) }}"
                          method="POST"
                          style="display:inline-block">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Bạn có chắc muốn xóa?')">
                            Xóa
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="5" class="text-center">
                    Không có dữ liệu
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection
