<article class="flex container contact-container">
    <h2 class="heading heading-margin contact-heading">
        <span>Contact</span>
    </h2>  
    <div class="grid contact-grid">
        {{-- <div class="flex contact-phrase-container contact-two">
            <p class="contact-phrase">
                How I can help you reach your goals?
            </p>
        </div> --}}
        <div class="contact-one">
            <form 
                action="contact-me" 
                method="POST"
                class="contact-form"
            >    
                @csrf
                <div class="flex control-group">
                    <label class="text-highlight" for="name">Name</label>
                    <input id="name" name="name" type="text" required>
                    @error('name')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex control-group">
                    <label class="text-highlight" for="email">Email</label>
                    <input id="email" name="email" type="text" required>
                    @error('email')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex control-group">
                    <label class="text-highlight" for="message">Message</label>
                    <textarea id="message" name="message" cols="30" rows="10" required></textarea>
                    @error('message')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex control-group">
                    <button 
                        type="submit"
                        class="button button-blue"
                    >
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</article>
<img 
    src="{{URL::asset("/images/desktop_contact_image.jpg")}}" 
    alt="A pair of outstretched hands hover over the keys; wondering what to write next."
    class="contact-image"
>
<img 
    src="{{URL::asset("/images/mobile_contact_image.jpg")}}" 
    alt="A pair of outstretched hands hover over the keys; wondering what to write next."
    class="mobile-contact-image"
>
</div>