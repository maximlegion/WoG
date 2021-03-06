@extends('layouts.app')


@section('content')
<!-- USER PROFILE BLOCK -->


<div class="dash-unit">
    <dtitle>Квесты в работе</dtitle>
    <hr>
    <div class="framemail">
        <div class="window">
            <ul class="mail">

                @foreach ($quests as $val)
                <li>
                    <i class="{{ $val->user_quest_status_id=1 ? 'unread' : ($val->user_quest_status_id=2 ? 'read': 'xx') }}"></i>
                    <img class="avatar" src="{{asset($val->photo())}}" alt="avatar">
                    <p class="sender">{{ $val->name }}</p>
                    <p class="message">{{ $val->description }}</p>
                    {{--<div class="actions">
				 						<button style="margin-top: 14px;  margin-right: 5px; margin-left: -25px;" type="button" class="btn btn-default btn-xs">Завершить квест</button>
				 						 <a href="#"><img></a>
 			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
			                </div>--}}
                </li>
                @endforeach
                {{-- 			            <li>
			                <i class="read"></i>
			                <img class="avatar" src="{{asset('img/photo01.jpeg')}}" alt="avatar">
                <p class="sender">Бог</p>
                <p class="message"><strong>Квест</strong> - Исправь 10 багов...</p>
                <div class="actions">
                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                </div>
                </li>
                <li>
                    <i class="read"></i>
                    <img class="avatar" src="{{asset('img/photo01.jpeg')}}" alt="avatar">
                    <p class="sender">Бог</p>
                    <p class="message"><strong>Квест</strong> - Заполни весь профиль ...</p>
                    <div class="actions">
                        <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                        <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                        <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                        <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                    </div>
                </li>
                <li>
                    <i class="read"></i>
                    <img class="avatar" src="{{asset('img/photo01.jpeg')}}" alt="avatar">
                    <p class="sender">Бог</p>
                    <p class="message"><strong>Квест</strong> - Победи релиз ...</p>
                    <div class="actions">
                        <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
                        <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
                        <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a>
                        <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</div>

@stop