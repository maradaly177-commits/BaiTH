Danh mục
<select name="category_id">

<option value="">-- Chọn danh mục --</option>

@foreach($categories as $cat)
<option value="{{ $cat->id }}">{{ $cat->name }}</option>
@endforeach

</select>