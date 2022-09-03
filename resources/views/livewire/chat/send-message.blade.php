<div>
    @if($selected_conversation)
    <form wire:submit.prevent="sendMessage">
        <div class="main-chat-footer">
            <input class="form-control" wire:model="body" placeholder="اكتب رسالتك..." type="text">
            <button class="main-msg-send" type="submit"><i class="far fa-paper-plane"></i></button>
        </div>
    </form>
    @endif
</div>
