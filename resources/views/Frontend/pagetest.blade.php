@include('Frontend.bin.header')

<div>
    <div class="message">

    </div>
    <form>
        @csrf
        <input id="newsletter1" type="text" class="form-control testemail" placeholder="Email address">
        <button class="btn btn-primary test" type="button">Select</button>

    </form>






</div>

@include('Frontend.bin.footer')