<!-- Feedback Form -->
<div class="g-bg-color--primary-light">
    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
        <div class="g-text-center--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Feedback</p>
            <h2 class="g-font-size-32--xs g-font-size-36--md">Send us a note</h2>
        </div>
        <form method="post" class="contact-form" onsubmit="return contactSupport()">
            <div class="row g-margin-b-40--xs">
                <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                    <div class="g-margin-b-20--xs">
                        <input type="text" id="c-name" class="form-control s-form-v2__input g-radius--50" placeholder="* Name">
                    </div>
                    <div class="g-margin-b-20--xs">
                        <input type="email" id="c-email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email">
                    </div>
                    <input type="text" id="c-phone" class="form-control s-form-v2__input g-radius--50" placeholder="* Phone">
                </div>
                <div class="col-sm-6">
                    <textarea id="c-message" class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="* Your message"></textarea>
                </div>
            </div>
            <div class="g-text-center--xs">
                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Submit</button>
            </div>
        </form>
    </div>
</div>
<!-- End Feedback Form -->