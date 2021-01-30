<div>
    <div role="form" class="php-email-form mt-4">
        <div class="form-group">
            <input wire:model="subject" type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
        </div>
        <div class="form-group">
            <textarea wire:model="message" class="form-control" name="message" rows="5" data-rule="required"
                data-msg="Please write something for us" placeholder="Please Explain your Query in brief"></textarea>
            <div class="validate"></div>
        </div>
        <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button wire:click="fileComplaint" type="submit">Send Message</button></div>
    </div>
</div>
