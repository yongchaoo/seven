@extends('Layouts._default')
@section('title','goal')

@section('content')

    <div class="row add-store">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">添加目标</div>
                <div class="panel-body">
                    @include('shared._errors')
                    <form class="form-horizontal form-box" method="POST" action="{{route('goal/store')}}">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">标题</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" id="name" placeholder="input goal title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail5" class="col-sm-2 control-label">开始</label>
                            <div class="col-sm-10">
                                <input type="text" name="start_time" class="form-control" id="inputEmail5" placeholder="input start time">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">结束</label>
                            <div class="col-sm-10">
                                <input type="text" name="end_time" class="form-control" id="inputPassword3" placeholder="input end time ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">类型</label>
                            <div class="col-sm-10">
                                <select name="type" class="form-control">
                                    <option>日清</option>
                                    <option>其他</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail4" class="col-sm-2 control-label">内容</label>
                            <div class="col-sm-10">
                                <textarea name="content" id="" class="form-control" cols="66" rows="10" placeholder="input content"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success text-center">提交</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection()