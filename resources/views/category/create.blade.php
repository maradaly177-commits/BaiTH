<div class="form-group">
    <label>Danh mục cha</label>
    <select name="parent_id" class="form-control">
        <option value="">-- Không có --</option>

        @foreach($categories as $cat)
            <option value="{{ $cat->id }}"
                {{ isset($category) && $category->parent_id == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
            </option>
        @endforeach
    </select>
</div>
