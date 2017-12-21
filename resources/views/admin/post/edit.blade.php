@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/bower_components/select2/dist/css/select2.min.css') }}" >
@endsection

@section('main-content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        @include('admin.layouts.pageHead')
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>

            @include('includes.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('post.update',$post->id)  }}" method="post" enctype="multipart/form-data">
              {{  csrf_field() }}
              {{  method_field('PATCH') }}
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ $post->title }}">
                  </div>

                  <div class="form-group">
                    <label for="subtitle">Post Sub Title</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="sub title" value="{{ $post->subtitle }}">
                  </div>

                  <div class="form-group">
                    <label for="slug">Post Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $post->slug }}">
                  </div>

                </div>

                <div class="col-lg-6">

                    <div class="form-group">
                      <div class="pull-right">
                          <label for="image">File input</label>
                          <input type="file" name ="image" id="image">
                      </div>

                      <p class="help-block">Example block-level help text here.</p>
                    </div>



                    <div class="checkbox pull-left">
                      <label>
                        <input type="checkbox" name="status"  value="1"  @if ($post->status == 1) checked  @endif> Publish
                      </label>
                    </div>
<br><br>
                  <div class="form-group" style="margin-top:18px;">
                    <label>Selects Tags</label>
                    <select class="form-control select2" name="tags[]" multiple="multiple" data-placeholder="Select a tags"
                            style="width: 100%;">
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}"
                                    @foreach ($post->tags as $postTag)
                                      @if($postTag->id == $tag->id)
                                        selected
                                      @endif
                                    @endforeach
                                  >
                                  {{ $tag->name }}</option>
                            @endforeach
                    </select>
                  </div>

                  <div class="form-group" style="margin-top:18px;">
                    <label>Selects Categories</label>
                    <select class="form-control select2" name="categories[]"  multiple="multiple" data-placeholder="Select a categories"
                            style="width: 100%;">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @foreach ($post->categories as $postCategories)
                                      @if($postCategories->id == $category->id)
                                        selected
                                      @endif
                                    @endforeach
                                  >{{ $category->name }}</option>
                            @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->



          </div>
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write Post Body Here
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>

              </div>



              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">

                <textarea class="textarea" name="body" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $post->body }}</textarea>

            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
               <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>

            </div>
          </div>

        </div></form>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('footerSection')
  <script src="{{  asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    })
  </script>
@endsection
