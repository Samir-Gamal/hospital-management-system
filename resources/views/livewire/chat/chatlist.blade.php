<div>
    <div class="main-chat-list" id="ChatList">
        @foreach($conversations as $conversation)
            <div class="media new">
                <div class="media-body">
                    <div class="media-contact-name">
                        <span>{{$this->getUsers($conversation,$name='name')}}</span>
                        <span>{{$conversation->messages->last()->created_at->shortAbsoluteDiffForHumans()}}</span>
                    </div>
                    <p>{{$conversation->messages->last()->body}}</p>
                </div>
            </div>
        @endforeach
    </div><!-- main-chat-list -->
</div>
