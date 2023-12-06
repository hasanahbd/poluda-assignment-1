<select {{ $attributes->merge(['class' => $selector]) }} name="categories[]" multiple="multiple">
    @foreach($categories as $category)
        <option value="{{ $category->id }}" {{ in_array($category->id, $selectedCategories ?? []) ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
    @endforeach
</select>
