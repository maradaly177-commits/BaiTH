Danh mục
<select name="category_id">

<option value="">-- Chọn danh mục --</option>

@foreach($categories as $cat)
<option value="{{ $cat->id }}" 
{{ $product->category_id == $cat->id ? 'selected' : '' }}>
{{ $cat->name }}
</option>
@endforeach

</select>