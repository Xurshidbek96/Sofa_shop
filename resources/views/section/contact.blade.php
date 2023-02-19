
<div class="contact_section layout_padding">
    <div class="container">
        <div class="contact_section_2">
            @if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    		@endif
            <div class="row">
                <div class="col-md-6">
                    <div class="mail_section_1">
                        <h1 class="contact_taital">Contact Us</h1>
                        <form action="{{ route('sendMessage') }}" method="POST">
                            @csrf
                            <input type="text" class="mail_text" placeholder="Name" name="name" value="{{ old('name') }}">
                            @error('name') <div style="color:red">{{ $message }}</div>@enderror
                            <input type="text" class="mail_text" placeholder="Email" name="email" value="{{ old('email') }}"">
                            @error('email') <div style="color:red">{{ $message }}</div>@enderror

                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message" value="{{ old('message') }}">{{ old('message') }}</textarea>
                            @error('message') <div style="color:red">{{ $message }}</div>@enderror
                            <button type="submit" class="send_bt"><a>SEND</a></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="600" height="360" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
