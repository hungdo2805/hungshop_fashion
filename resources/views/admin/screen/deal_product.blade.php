@extends('admin.layout')

@section('main')
   <div class="row">
      <div class="col-md-12">
         <div class="box">
                <div class="box-header with-border">
                    <h2 class="box-title">Tạo mới deal</h2>

                    <div class="box-tools">
                        <div class="btn-group pull-right" style="margin-right: 5px">
                            <a href="{{ route('admin_banner.index') }}" class="btn  btn-flat btn-default" title="List"><i class="fa fa-list"></i><span class="hidden-xs"> {{trans('admin.back_list')}}</span></a>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="{{ $url_action }}" method="post" accept-charset="UTF-8" class="form-horizontal" id="form-main"  enctype="multipart/form-data">


                    <div class="box-body">
                        <div class="fields-group">

                            <div class="form-group   {{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="col-sm-2 col-form-label">{{ trans('banner.image') }}</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" id="image" name="image" value="{{ old('image',$banner['image']??'') }}" class="form-control input-sm image" placeholder=""  />
                                       <span class="input-group-btn">
                                         <a data-input="image" data-preview="preview_image" data-type="deal_product" class="btn btn-sm btn-primary lfm">
                                           <i class="fa fa-picture-o"></i> {{trans('product.admin.choose_image')}}
                                         </a>
                                       </span>
                                    </div>
                                        @if ($errors->has('image'))
                                            <span class="help-block">
                                                {{ $errors->first('image') }}
                                            </span>
                                        @endif
                                    <div id="preview_image" class="img_holder">
                                        @if (old('image',$banner['image']??''))
                                        <img src="{{ asset(old('image',$banner['image']??'')) }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group   {{ $errors->has('url') ? ' has-error' : '' }}">
                                <label for="url" class="col-sm-2 col-form-label">Type Deal</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        <input type="text" id="heading" name="heading" value="{{ old()?old('url'):$banner['heading']??'' }}" class="form-control" placeholder="" />
                                    </div>
                                        @if ($errors->has('heading'))
                                            <span class="help-block">
                                                {{ $errors->first('heading') }}
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('url') ? ' has-error' : '' }}">
                                <label for="url" class="col-sm-2 col-form-label">{{trans('product.product_name')}}</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        <input type="text" id="name_product" name="name_product" value="{{ old()?old('url'):$banner['name_product']??'' }}" class="form-control" placeholder="" />
                                    </div>
                                        @if ($errors->has('name_product'))
                                            <span class="help-block">
                                                {{ $errors->first('name_product') }}
                                            </span>
                                        @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('url') ? ' has-error' : '' }}">
                                <label for="url" class="col-sm-2 col-form-label">{{trans('product.price')}}</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        <input type="number" id="deal_price" name="deal_price" value="{{ old()?old('url'):$banner['deal_price']??'' }}" class="form-control" placeholder="" />
                                    </div>
                                        @if ($errors->has('deal_price'))
                                            <span class="help-block">
                                                {{ $errors->first('deal_price') }}
                                            </span>
                                        @endif
                                </div>
                            </div>
                            <div class="form-group   {{ $errors->has('url') ? ' has-error' : '' }}">
                                <label for="url" class="col-sm-2 col-form-label">{{ trans('banner.url') }}</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        <input type="text" id="url" name="url" value="{{ old()?old('url'):$banner['url']??'' }}" class="form-control" placeholder="" />
                                    </div>
                                        @if ($errors->has('url'))
                                            <span class="help-block">
                                                {{ $errors->first('url') }}
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group   {{ $errors->has('url') ? ' has-error' : '' }}">
                                <label for="url" class="col-sm-2 col-form-label">{{trans('front.title')}}</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        <input type="text" id="title" name="title" value="{{ old()?old('url'):$banner['title']??'' }}" class="form-control" placeholder="" />
                                    </div>
                                        @if ($errors->has('title'))
                                            <span class="help-block">
                                                {{ $errors->first('title') }}
                                            </span>
                                        @endif
                                </div>
                            </div>
                            <div class="form-group   {{ $errors->has('url') ? ' has-error' : '' }}">
                                <label for="url" class="col-sm-2 col-form-label">Time Deal</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        <input type="date" id="time_deal" name="time_deal" value="{{ old()?old('url'):$banner['time_deal']??'' }}" class="form-control" placeholder="" />
                                    </div>
                                        @if ($errors->has('time_deal'))
                                            <span class="help-block">
                                                {{ $errors->first('time_deal') }}
                                            </span>
                                        @endif
                                </div>
                            </div>
                            <div class="form-group  {{ $errors->has('target') ? ' has-error' : '' }}">
                                    <label for="target" class="col-sm-2 col-form-label">{{ trans('banner.admin.select_target') }}</label>
                                    <div class="col-sm-8">
                                        <select class="form-control target select2" style="width: 100%;" name="target" >
                                            <option value=""></option>
                                            @foreach ($arrTarget as $k => $v)
                                                <option value="{{ $k }}" {{ (old('target',$banner['target']??'') ==$k) ? 'selected':'' }}>{{ $v }}</option>
                                            @endforeach
                                        </select>
                                            @if ($errors->has('target'))
                                                <span class="help-block">
                                                    <i class="fa fa-info-circle"></i> {{ $errors->first('target') }}
                                                </span>
                                            @endif
                                    </div>
                             </div>

                            <div class="form-group   {{ $errors->has('sort') ? ' has-error' : '' }}">
                                <label for="sort" class="col-sm-2 col-form-label">{{ trans('banner.sort') }}</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>
                                        <input type="number" style="width: 100px;" min = 0 id="sort" name="sort" value="{{ old()?old('sort'):$banner['sort']??0 }}" class="form-control sort" placeholder="" />
                                    </div>
                                        @if ($errors->has('sort'))
                                            <span class="help-block">
                                                {{ $errors->first('sort') }}
                                            </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group  ">
                                <label for="status" class="col-sm-2 col-form-label">{{ trans('banner.status') }}</label>
                                <div class="col-sm-8">
                                    <input class="input" type="checkbox" name="status"  {{ old('status',(empty($banner['status'])?0:1))?'checked':''}}>
                                </div>
                            </div>

                    <!-- /.box-body -->

                    <div class="box-footer">
                            @csrf
                        <div class="col-md-2">
                        </div>

                        <div class="col-md-8">
                            <div class="btn-group pull-right">
                                <button type="submit" class="btn btn-primary">{{ trans('admin.submit') }}</button>
                            </div>

                            <div class="btn-group pull-left">
                                <button type="reset" class="btn btn-warning">{{ trans('admin.reset') }}</button>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-footer -->
                </form>

        </div>
    </div>
</div>
@endsection

@push('styles')

@endpush

@push('scripts')



<script type="text/javascript">

$(document).ready(function() {
    $('.select2').select2()
});

</script>

@endpush
