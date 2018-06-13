@extends('Layouts._default')
@section('title','home')
@section('content')
    <div class="main">
            <div class="row">
                @foreach ($datas as $data)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="img/{{$data->img}}.jpg" alt="...">
                            <div class="caption">
                                <h3>{{$data->title}}</h3>
                                <p>{{$data->content}}</p>
                                <p>
                                <form
                                        class="form-horizontal form-box"
                                        method="POST"
                                        action="{{route('goal/finish',array('goal_id' =>$data->id))}}">
                                    {{ csrf_field() }}
                                    <button type="submit"
                                           class="btn btn-primary" role="button">Done</button>
                                </form>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="goal-type">
                <button href="#" class="btn btn-success" role="button">全部</button>
                <button href="#" class="btn btn-ghost" role="button">已完成</button>
            </div>
    </div>
@endsection


