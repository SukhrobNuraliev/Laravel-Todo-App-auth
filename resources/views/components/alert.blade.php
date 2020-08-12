<div>
    @if (session()->has('message'))
        <div class="alert alert-success">{{ session()->get('message') }}</div>
    @endif

    @error('name')
         <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>