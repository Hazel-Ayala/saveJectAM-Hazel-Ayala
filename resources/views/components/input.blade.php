@props(['titulo','type','shi'])


<label for=''>{{ $titulo }}</label>
<input name={{$shi}} type={{$type}}>
@error($shi)
    <!--<p>{{ $message }}</p>
@enderror
