<!-- File: resources/views/contact.blade.php -->
<form method="POST" action="/save">

    @csrf
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" ><br>
        @if($errors->has('name'))
            <div class="alert alert-danger">
            {{ $errors->first('name') }}
            </div>
        @endif
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" ><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message"></textarea><br>
    <button type="submit">Submit</button>
   
    @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
    @endif

    @if($errors)
     {{ dd($errors->all()) }}
    @endif
</form>