<div>
    <div role="form" class="php-email-form mt-4" >
        <div class="form-group">
            <textarea wire:model.debounce.200ms="notice" class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Please write here what you would like to notify."></textarea>
            <div class="validate"></div>
        </div>
        <div class="mb-3">
            <div class="loading">Loading</div>
            @error('notice')
                <div class="error-message">{{ $message }}</div>
            @enderror

            @if(session()->has('success'))
                <div class="sent-message">{{ session('success') }}</div>
            @endif
        </div>
        <div class="text-center"><button wire:click="postNotice" type="submit">Send Notice</button></div>
    </div>
</div>
