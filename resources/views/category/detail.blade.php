@extends('layouts.admin')

@section('title', 'Chi tiết danh mục')

@section('content')

<div class="container mt-4">

```
<h2>Chi tiết danh mục</h2>

<div class="card mt-3">
    <div class="card-body">

        <div class="mb-3">
            <strong>ID:</strong>
            {{ $category->id }}
        </div>

        <div class="mb-3">
            <strong>Tên danh mục:</strong>
            {{ $category->name }}
        </div>

        <div class="mb-3">
            <strong>Mô tả:</strong>
            {{ $category->description ?? 'Không có mô tả' }}
        </div>

        <div class="mb-3">
            <strong>Danh mục cha:</strong>

            @if($category->parent_id)
                {{ \App\Models\Category::find($category->parent_id)->name ?? 'Không xác định' }}
            @else
                Không có
            @endif

        </div>

        <div class="mb-3">
            <strong>Trạng thái:</strong>

            @if($category->is_active)
                <span class="badge bg-success">Hoạt động</span>
            @else
                <span class="badge bg-danger">Không hoạt động</span>
            @endif

        </div>

        <div class="mb-3">
            <strong>Image:</strong><br>

            @if($category->image)
                <img src="{{ $category->image }}" width="150">
            @else
                Không có hình
            @endif

        </div>

        <div class="mt-4">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                Quay lại
            </a>

            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">
                Chỉnh sửa
            </a>
        </div>

    </div>
</div>
```

</div>

@endsection
