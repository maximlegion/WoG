@extends('layouts.app')


@section('content')
	<!-- USER PROFILE BLOCK -->
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
<!--         	<div class="half-unit">
	      		<dtitle>Local Time</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<digiclock>12:45:25</digiclock>
						<p>StatCounter Information</p>
		      		</div>
		      	</div> -->
		      	<div id='Quest' style=" height: 170px; " class="half-unit">
		      		<dtitle>Новые задания</dtitle>
		      		<hr>
		      		<div class="cont2">
		      			<img style="height: 45px; width: 45px;" src="{{asset('img/photo01.jpeg')}}" alt="">
		      			<br>
		      			<br>
		      			<p>Система</p>
		      			<p><bold>{{$QustByUser[0]->name}}</bold></p>
		      			<button data-user-id="{{Auth::user()->id}}" data-quest-id="{{$QustByUser[0]->id}}" data-type="true" type="button" class="add-dell-new-qvest btn btn-default btn-xs">Принять</button>
		      			<button data-user-id="{{Auth::user()->id}}" data-quest-id="{{$QustByUser[0]->id}}" data-type="false" type="button" class="add-dell-new-qvest btn btn-default btn-xs">Отклонить</button>
		      		</div>
		      	</div>
		      	<div class="dash-unit">
		      		<dtitle>Профиль пользователя</dtitle>
		      		<hr>
		      		<div class="thumbnail">
		      			<img style=" height: 80px; " src="{{asset('img/face80x80.jpg')}}" alt="Marcel Newman" class="img-circle">
		      		</div><!-- /thumbnail -->
		      		<h1>{{ Auth::user()->name }}</h1>
		      		{{-- <h3>{{ $staus[0]->name }}</h3> --}}
		      		<br>
		      		<div class="info-user">
		      			<span aria-hidden="true" class="li_user fs1"></span>
		      			<span aria-hidden="true" class="li_settings fs1"></span>
		      			<span aria-hidden="true" class="li_mail fs1"></span>
		      			<span aria-hidden="true" class="li_key fs1"></span>
		      		</div>
		      	</div>
		      	<div class="dash-unit">
		      		<dtitle>Балансы</dtitle>
		      		<hr>
		      		<div class="cont">
		      			@foreach ($cash as $val)

		      			<p style="text-align: left;">{{$val->name}} - <bold>{{$val->value}}</bold> | <ok>{{$val->unit}}</ok></p>


		      			@endforeach

{{-- 					<br>
					<p><bold>$377</bold> | Pending</p>
					<br>
					<p><bold>$156</bold> | <bad>Denied</bad></p>
					<br>
					<p><img src="http://www.prepbootstrap.com/Content/images/shared/single-page-admin/up-small.png" alt=""> 12% Compared Last Month</p> --}}

				</div>

			</div>
		{{-- 	<div class="half-unit">
	      		<dtitle>Server Uptime</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><img src="http://www.prepbootstrap.com/Content/images/shared/single-page-admin/up.png" alt=""> <bold>Up</bold> | 356ms.</p>
				</div>
			</div>
			<div class="half-unit">
	      		<dtitle>Server Uptime</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><img src="http://www.prepbootstrap.com/Content/images/shared/single-page-admin/up.png" alt=""> <bold>Up</bold> | 356ms.</p>
				</div>
			</div> --}}
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

			<!-- BARS CHART - lineandbars.js file -->     
			<div style=" height: 450px; " class="half-unit">
				<dtitle>Скилы</dtitle>
				<hr>
				<div class="cont">
					<p><bold>234</bold> | Спикер   Навык красиво говорить</p>
				</div>
				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;"><span class="sr-only">60% Complete</span>

					</div>
				</div>
				<div class="cont">
					<p><bold>32</bold> | Слушатель  Навык внимательно слушать и не перебивать</p>
				</div>

				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:10%;"><span class="sr-only">60% Complete</span>
					</div>
				</div>
				<div class="cont">
					<p><bold>13</bold> | Powerpoint Навык красиво рисовать презентации</p>
				</div>

				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:4%;"><span class="sr-only">60% Complete</span>
					</div>
				</div>
			</div>
		
			<!-- TO DO LIST -->     
{{--       		<div class="half-unit">
	      		<dtitle>To Do List</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><bold>13</bold> | Pending Tasks</p>
				</div>
		             <div class="progress">
				        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%;"><span class="sr-only">60% Complete</span>
					        
				        </div>
				     </div>
				 </div> --}}
				 <div class="dash-unit">
				 	<dtitle>Игровая зона | Квесты</dtitle>
				 	<hr>
				 	<div class="framemail">
				 		<div class="window">
				 			<ul class="mail">

				 				@foreach ($MyQustByUser as $val)
				 				<li>
				 					<i class="unread"></i>
				 					<img class="avatar" src="{{asset('img/photo01.jpeg')}}" alt="avatar">
				 					<p class="sender">Бог</p>
				 					<p class="message"><strong>{{$val->name}}</strong> - {{ $val->description}}...</p>
				 					<div class="actions">
				 						<button style="margin-top: 14px;  margin-right: 5px; margin-left: -25px;" type="button" class="btn btn-default btn-xs">Завершить квест</button>
				 						{{-- <a href="#"><img></a> --}}
{{-- 			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/undo.png" alt="reply"></a>
			                    <a><img src="http://png-1.findicons.com/files//icons/2232/wireframe_mono/16/star_fav.png" alt="favourite"></a>
			                    <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/tag.png" alt="label"></a> --}}
			                    {{-- <a><img src="http://png-4.findicons.com/files//icons/2232/wireframe_mono/16/trash.png" alt="delete"></a> --}}
			                </div>
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

	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<div style=" height: inherit; " class="dash-unit">
	      		<dtitle>Инвентарь</dtitle>
	      		<hr>
      			<div class="Inventory">
      				<div class="InventoryItem">
						<div style=" padding-top: 15px; " class="info-user">
							<span aria-hidden="true" class="li_news fs2"></span>
						</div>
      				</div>
      				<div class="InventoryItem"></div>
      				<div class="InventoryItem"></div>
      				<div class="InventoryItem"></div>
      				<div class="InventoryItem"></div>
      				<div class="InventoryItem"></div>
      				<div class="InventoryItem"></div>
      				<div class="InventoryItem"></div>
      				<div class="InventoryItem"></div>
      				<div class="InventoryItem"></div>
      			</div>
				
{{--       			<div class="text">
      				<p><b>Alvarez.is:</b> A beautiful new Dashboard theme has been realised by Carlos Alvarez. Please, visit <a href="http://alvarez.is">Alvarez.is</a> for more details.</p>
      				<p><grey>Last Update: 5 minutes ago.</grey></p>
      			</div> --}}
      		</div>
      				<div class="dash-unit">
			<dtitle>Сообщения</dtitle>
			<hr>
			<div class="info-user">
				<span aria-hidden="true" class="li_megaphone fs2"></span>
			</div>
			<br>
			<div id="jstwitter" class="clearfix">
				<ul id="twitter_update_list"></ul>
			</div>
			<script src="http://twitter.com/javascripts/blogger.js"></script><!-- Script Needed to load the Tweets -->
			<script src="http://api.twitter.com/1/statuses/user_timeline/wrapbootstrap.json?callback=twitterCallback2&amp;count=1"></script>
			<!-- To show your tweets replace "wrapbootstrap", in the line above, with your user. -->
			<div class="text">
				<p><grey  style=" font-size: 17px; "  >Дорогой игрок вы взяли квест Расскажи о себе миру. Награда за выполнения будет ждать тебя!</grey></p>

			</div>
		</div>
	</div>
<script>

	$('.add-dell-new-qvest').click(function(event) {
		console.log($(this).data());
		$.get('/add-user-quest?userID=' + $(this).data().userId + '&questId=' + $(this).data().questId, function(data) {
			/*optional stuff to do after success */
		});
		$('#Quest').html(' ');
		
	});


      	// $.ajax({
      	// 	url: '/path/to/file',
      	// 	type: 'POST',
      	// 	dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
      	// 	data: {param1: 'value1'},
      	// })
      	// .done(function() {
      	// 	console.log("success");
      	// })
      	// .fail(function() {
      	// 	console.log("error");
      	// })
      	// .always(function() {
      	// 	console.log("complete");
      	// });
      	
      </script>
      @stop