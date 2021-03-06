@component('user._layout',['active'=>'media','header'=>__('user.media_info')])

    <div>
        <p><span class="mr-1">{{__("media.name")}}:</span>{{$media->name}}</p>
        <p><span class="mr-1">{{__("media.domain")}}:</span>{{$media->domain}}</p>
        <p><span class="mr-1">{{__("media.promotion_url")}}:</span>{{$media->promotion_url}}</p>
        <p><span class="mr-1">{{__("media.logo")}}:</span>
            @if($media->logo)
                <img src="{{$media->logo}}" width="50" height="50"/>
            @endif
        </p>
        <p><span class="mr-1">{{__("media.description")}}:</span>{{$media->description}}</p>
        <p>
            <span class="mr-1">{{__("media.verification_code")}}:</span>
            @include('components.contents.code',['code'=>'<meta name="malllian-verification" content="'.$media->verification_key.'" />'])
        </p>
        <p><span class="mr-1">{{__("media.verified")}}:</span>
            @include('components.contents.status',['status'=>$media->verified])
        </p>

        <p><span class="mr-1">{{__("media.providing")}}:</span>
            @include('components.contents.status',['status'=>$media->providing])
        </p>
        <p><span class="mr-1">{{__("media.consuming")}}:</span>
            @include('components.contents.status',['status'=>$media->consuming])
        </p>
        <p><span class="mr-1">{{__("media.consume_bid")}}:</span>{{$media->consume_bid}}</p>
        <p><span class="mr-1">{{__("created_at")}}:</span>{{$media->created_at}}</p>
        <p>
            @include('user.media._operations',['delete'=>true])
        </p>

    </div>


@endcomponent
