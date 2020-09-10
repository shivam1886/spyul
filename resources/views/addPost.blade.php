@extends('layouts.app')
@section('content')
   @include('components.headerComponent')
      <!--START add post-->
    <section class="add-post-page top-padding">
        <div class="container">
            <div class="heading">
                <h2>Add Post</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="input-media">
                            <div class="form-group">
                                <textarea name="" id="" cols="" rows="3" placeholder="Post Title...."></textarea>
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="" rows="6" placeholder="Star writing your post here. You can insert images and videos by clicking on the icons below..."></textarea>
                            </div>
                            
                            <div class="media-btn clearfix">
                                <div class="media">
                                    <h2>Insert:</h2>
                                    
                                    <div class="buttons">
                                        <button>
                                            <label>
                                                <input type="file" checked="" name="" id="">
                                                <i class="far fa-image"></i> Image
                                            </label>
                                        </button>
                                        <button>
                                            <label>
                                                <input type="file" checked="" name="" id="">
                                                <i class="fas fa-video"></i> Video
                                            </label>
                                        </button>
                                    </div>
                                </div>

                                <div class="post-btn m-off">
                                    <button>Post</button>
                                </div>
                            </div>

                            <!--START uploaded data preview-->
                            <div class="data-prview">
                                <h2>Preview</h2>
                                <div class="single-preview">
                                    <img src="{{asset('public')}}}/images/01.jpg" alt="">
                                    <button><i class="fas fa-times"></i></button>
                                </div>

                                <div class="single-preview">
                                    <video controls>
                                        <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerMeltdowns.mp4" type="video/mp4">
                                        <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerMeltdowns.mp4" type="video/ogg">
                                        Your browser does not support HTML video.
                                      </video>
                                    <button><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <!--END uploaded data preview-->

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="tag-category">
                            <div class="form-group">
                                <h2>Tag</h2>
                                <input type="text" name="tag" placeholder="Tag Name">

                                <div class="tag-list">
                                </div>
                            </div>
                            <div class="form-group">
                                <h2>Category</h2>
                                <select name="category" placeholder="Select Category">
                                    @foreach($data['categories'] as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
							</div>
							
							<div class="post-btn m-on">
								<button>Post</button>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--END add post-->
@endsection
@push('css')
@endpush
@push('js')
 <script type="text/javascript">
     $(function(){

            $('body').on('keyup','input[name="tag"]',function(e){
                if(e.keyCode == 13 || e.keyCode == 32){
                    tag = e.target.value;
                    tag = tag.replace(/#/g, "");
                    if(tag != ''){
                           tag = '#' + tag;
                    let categoryList = $('body .tag-category .tag-list');
                    let listOption   = '';
                        listOption   = '<span>'+tag+' <i class="fas fa-times"></i><input type="hidden" name="tag[]" value="'+tag+'"></span>';
                        categoryList.append(listOption);
                    }
                        e.target.value = '';
                }
            });

            $('body').on('mouseout','input[name="tag"]',function(e){
                       tag = e.target.value;
                       tag = tag.replace(/#/g, "");
                    if(tag != ''){
                       tag = '#' + tag;
                        let categoryList = $('body .tag-category .tag-list');
                        let listOption   = '';
                        listOption   = '<span>'+tag+' <i class="fas fa-times"></i><input type="hidden" name="tag[]" value="'+tag+'"></span>';
                        categoryList.append(listOption);
                    }
                        e.target.value = '';
            });

            $('body').on('click','.tag-category .tag-list .fa-times',function(e){
                 $(this).parents('span').remove();
            });
            
     }); 
 </script>
@endpush
