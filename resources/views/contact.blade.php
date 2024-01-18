@extends("layout.layout")
@section("content")
<x-banner page="Contact Us"/>
<div id="contactpage">
<div class="map">

</div>
<div class="contact">
    <div class="socials">
        <p>Facebook : Construction</p>
        <p>Facebook : Construction</p>
        <p>Facebook : Construction</p>
        <p>Facebook : Construction</p>
    </div>
    <div class="form">
        <p class="label">Send Us A Message</p>
        <form action={{ route('createmessage') }} method="POST">
            @csrf
            <div class="control">
                <input type="text" name="name" id="name">
                <label for="name">Name</label>
            </div>
            <div class="control">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="control">
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                <label for="message">Message</label>
            </div>

            <button class="click">Send Message</button>
        </form>
    </div>
</div>
</div>
@endsection
