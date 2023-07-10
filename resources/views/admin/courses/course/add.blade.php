@extends('admin.layouts.main')
@section('content')
<!-- Page -->
<div class="page">
    <div class="page-main">
        @extends('admin.layouts.sidebar')
        <!-- App-Content -->
        <div class="app-content main-content">
            <div class="side-app">
                @extends('admin.layouts.nav')
                <!--Page header-->
                <div class="page-header">
                    <div class="page-leftheader">
                        <!-- <h4 class="page-title mb-0">Add User</h4> -->
                    </div>
                    <div class="page-rightheader">

                    </div>
                </div>
                <form id="form" action="{{route('add_course_action')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h3 class="card-title">Add Course</h3>
                            </div>

                            <div class="card-body pb-2">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label><strong>Course Category</strong> <span class="required_star">*</span></label>
                                        <select name="category_id" class="form-control">
                                            <option value="" selected disabled>Select One</option>
                                            @if(isset($cat_list))
                                            @foreach($cat_list as $list)
                                            <option value="{{$list->id}}">{{$list->course_category}}</option>
                                            @endforeach
                                            @endif
                                        </select>
                                        @error('title')
                                        <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label><strong>Course Type</strong> <span class="required_star">*</span></label>
                                        <select name="type" class="form-control">
                                            <option value="" selected disabled>Select One</option>
                                            <option value="Free">Free</option>
                                            <option value="Featured">Featured</option>
                                            <option value="Trending">Trending</option>
                                        </select>
                                        @error('course_type')
                                        <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label><strong>Thumbnail</strong> <span class="required_star">*</span></label>
                                        <input type="file" name="thumbnail" class="form-control" />
                                        @error('thumbnail')
                                         <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label><strong>Title</strong> <span class="required_star">*</span></label>
                                    <input type="text" class="form-control" name="title" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label><strong>Sub Title</strong> <span class="required_star">*</span></label>
                                    <input type="text" class="form-control" name="sub_title" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label><strong>Sub Title</strong> <span class="required_star">*</span></label>
                                    <input type="text" class="form-control" name="sub_title" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label><strong>Description</strong> <span class="required_star">*</span></label>
                                    <textarea class="form-control" name="description" id="description"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label><strong>Things to learn</strong> <span class="required_star">*</span></label>
                                    <textarea class="form-control" name="learn" id="learn"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div id="accordion" class="w-100">
                                    <div class="card chapter">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapse_1">
                                                Chapter 1
                                            </a>
                                        </div>
                                        <div id="collapse_1" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label><strong>Chapter Name</strong> <span class="required_star">*</span></label>
                                                        <input type="text" class="form-control" name="chapter_name[]" />
                                                    </div>
                                                </div>
                                                <div class="row lessions chapter_1_lessions">
                                                    <div class="col-md-12 mt-3 lession">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <label><strong>Lesson Name</strong> <span class="required_star">*</span></label>
                                                                        <input type="text" class="form-control" name="lesson_name[]" />
                                                                    </div>
                                                                    <div class="col-md-1 d-flex align-items-end">
                                                                        <div class="form-check mt-3">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" class="form-check-input" name="content_type[]">
                                                                                <h4>Text</h4>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-1 d-flex align-items-end">
                                                                        <div class="form-check mt-3">
                                                                            <label class="form-check-label">
                                                                                <input type="radio" class="form-check-input" name="content_type[]">
                                                                                <h4>Video</h4>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6"></div>
                                                                    <div class="col-md-12 mt-3">
                                                                        <textarea class="form-control lession_text_content" name="lession_text_content[]"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="button" class="btn btn-primary addLesson" onclick="addLesson(1)">Add Lesson</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary w-100 addChapter" onclick="addNewChapter()">Add Chapter</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label><strong>Regular Price</strong> <span class="required_star">*</span></label>
                                    <input type="text" class="form-control" name="regular_price" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label><strong>Selling Price</strong> <span class="required_star">*</span></label>
                                    <input type="text" class="form-control" name="selling_price" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label><strong>Meta Title</strong> <span class="required_star">*</span></label>
                                    <input type="text" class="form-control" name="meta_title" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label><strong>Meta Description</strong> <span class="required_star">*</span></label>
                                    <input type="text" class="form-control" name="meta_description" />
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label><strong>Meta Keywords</strong> <span class="required_star">*</span></label>
                                    <input type="text" class="form-control" name="meta_keywords" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

                <!-- End Row-1 -->
            </div>
        </div>
        <!-- End app-content-->
    </div>
    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var i = 0;
            $("#add").click(function() {
                //console.log("ok");
                ++i;
                $("#example1").append('<tr><td><input type="text" name="addmore[what_you_will_learn][]" placeholder="What you will learn" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td></tr>');
            });

            $(document).on('click', '.remove-tr', function() {
                $(this).parents('tr').remove();
            });
        });

        $(document).ready(function() {
            var i = 0;
            $("#addCourseContent").click(function() {
                //console.log("ok");
                ++i;
                $("#example").append('<tr><td><input type="text" name="addmore[tab_name][]" placeholder="Name" class="form-control" /></td><td><textarea name="addmore[content][]" placeholder="Course Content" class="form-control"></textarea></td><td><button type="button" class="btn btn-danger remove-tr"><i class="fa fa-trash"></i></button></td></tr>');
            });

            $(document).on('click', '.remove-tr', function() {
                $(this).parents('tr').remove();
            });
        });
    </script>

    <script>
        function addNewChapter() {

            let numberOfChapter = $(".chapter").length
            let x = ++numberOfChapter

            $("#accordion").append(`
                    <div class="card chapter">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse_${x}">
                                Chapter ${x}
                            </a>
                        </div>
                        <div id="collapse_2" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label><strong>Chapter Name</strong> <span class="required_star">*</span></label>
                                        <input type="text" class="form-control" name="chapter_name[]" />
                                    </div>
                                </div>
                                <div class="row lessions chapter_${x}_lessions">
                                    <div class="col-md-12 mt-3 lession">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label><strong>Lesson Name</strong> <span class="required_star">*</span></label>
                                                        <input type="text" class="form-control" name="lesson_name[]" />
                                                    </div>
                                                    <div class="col-md-1 d-flex align-items-end">
                                                        <div class="form-check mt-3">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="content_type[]">
                                                                <h4>Text</h4>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1 d-flex align-items-end">
                                                        <div class="form-check mt-3">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" name="content_type[]">
                                                                <h4>Video</h4>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6"></div>
                                                    <div class="col-md-12 mt-3">
                                                        <textarea class="form-control lession_text_content" name="lession_text_content[]"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary addLesson" onclick="addLesson(${x})">Add Lesson</button>
                            </div>
                        </div>
                    </div>
                `)
        }

        function addLesson(index) {
            $(`.chapter_${index}_lessions`).append(`
                <div class="col-md-12 mt-3 lession">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label><strong>Lesson Name</strong> <span class="required_star">*</span></label>
                                    <input type="text" class="form-control" name="lesson_name[]" />
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    <div class="form-check mt-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="content_type[]">
                                            <h4>Text</h4>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1 d-flex align-items-end">
                                    <div class="form-check mt-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="content_type[]">
                                            <h4>Video</h4>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-12 mt-3">
                                    <textarea class="form-control lession_text_content" name="lession_text_content[]"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `)
        }
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#learn'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        $(document).ready(function() {
            $("#form").on("submit", function(event) {
                event.preventDefault()

                let data = {}

                data.category_id = $("[name='category_id']").val()
                data.course_type = $("[name='type']").val()
                data.meta_keywords = $("[name='slug']").val()
                data.title = $("[name='title']").val()
                data.sub_title = $("[name='sub_title']").val()
                data.slug = $("[name='slug']").val()
                data.description = $("[name='description']").val()
                data.things_to_learn = $("[name='regular_pthings_to_learnrice']").val()
                data.regular_price = $("[name='regular_price']").val()
                data.selling_price = $("[name='selling_price']").val()
                data.meta_title = $("[name='meta_title']").val()
                data.meta_description = $("[name='meta_description']").val()
                data.meta_keywords = $("[name='meta_keywords']").val()


                data.chapters = []

                $(".chapter").each(function() {
                    let obj = {}

                    obj.chapter_name = $(this).find("[name='chapter_name[]']").val()
                    obj.lessions = []

                    $(this).find(".lessions .lession").each(function() {
                        let lession = {}

                        lession.lession_name = $(this).find("[name='lesson_name[]']").val()
                        lession.content_type = $(this).find("[name='content_type[]']").val()
                        lession.lession_text_content = $(this).find("[name='lession_text_content[]']").val()
                        obj.lessions.push(lession)
                    })

                    data.chapters.push(obj)
                })

                console.log(data)
                return
            })
        })
    </script>