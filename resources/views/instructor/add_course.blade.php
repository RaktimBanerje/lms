    @include("instructor.inc.header")

    <div class="main_content_iner overly_inner">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="page_title_box d-flex align-items-center justify-content-between">
                        <div class="page_title_left">
                            <h3 class="f_s_30 f_w_700">Add Cours</h3>
                        </div>
                    </div>
                </div>
            </div>
            <form id="form" action="{{route('instructor_add_course_action')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-12 card_height_100">
                        <div class="gray__wrapp mb_20">
                            <div class="gray__holder">
                                <form>
                                    <div class="form-group">
                                        <input class="form-control form-control-lg mb-4 course__type" type="text" name="title" placeholder="Type your course title...........">
                                        <input class="form-control form-control-lg mb-4 course__subtitle" type="text" name="sub_title" placeholder="Type your course Sub title...........">
                                        <input class="form-control form-control-lg mb-4 course__subtitle" type="text" name="slug" placeholder="Url">
                                    </div>
                                    <div class="form-group text__area__holder mb-4">
                                        <label for="exampleFormControlFile1">Courese Description</label>
                                        <textarea class="form-control text__big" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                    </div>
                                    <div class="form-group text__area__holder mb-4">
                                        <label for="exampleFormControlFile1">Things to learn</label>
                                        <textarea class="form-control text__big" id="exampleFormControlTextarea1" rows="3" name="things_to_learn"></textarea>
                                    </div>
                                    <div class="form-group text__area__holder mb-4">
                                        <label for="exampleFormControlFile1">Add Thumbnail</label>
                                        <input id="file-0" name="thumbnail" type="file">
                                    </div>

                                    <div class="form-group text__area__holder mb-4">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="exampleFormControlFile1">Courese Catagory</label>
                                                <select name="category_id" class="form-control form-control-lg select__all">
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
                                            <div class="col-sm-3">
                                                <label for="exampleFormControlFile1">Courese Type</label>
                                                <select name="type" class="form-control form-control-lg select__all">
                                                    <option value="" selected disabled>Select One</option>
                                                    <option value="Free">Free</option>
                                                    <option value="Featured">Featured</option>
                                                    <option value="Trending">Trending</option>
                                                </select>
                                                @error('course_type')
                                                <span class="text text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="exampleFormControlFile1">Regular Price</label>
                                                <input class="form-control form-control-lg mb-4 course__subtitle" type="text" name="regular_price">
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="exampleFormControlFile1">Selling Price</label>
                                                <input class="form-control form-control-lg mb-4 course__subtitle" type="text" name="selling_price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group text__area__holder mb-4">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label for="exampleFormControlFile1">Level</label>
                                                <div class="form-check form-check-inline text-center radio__wrapp">
                                                    <input class="form-check-input" type="radio" name="level" id="inlineRadio1" value="all">
                                                    <label class="form-check-label" for="inlineRadio1">All Level</label>
                                                </div>

                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-check form-check-inline text-center radio__wrapp mt-5">
                                                    <input class="form-check-input" type="radio" name="level" id="inlineRadio2" value="beginner">
                                                    <label class="form-check-label" for="inlineRadio1">Beginner Level</label>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-check form-check-inline text-center radio__wrapp mt-5">
                                                    <input class="form-check-input" type="radio" name="level" id="inlineRadio3" value="intermediate">
                                                    <label class="form-check-label" for="inlineRadio1">Intermediate Level</label>
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-check form-check-inline text-center radio__wrapp mt-5">
                                                    <input class="form-check-input" type="radio" name="level" id="inlineRadio3" value="expert">
                                                    <label class="form-check-label" for="inlineRadio1">Expert Level</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="chapters">
                                        <div class="form-group bg__holder text__area__holder mb-4 chapter">
                                            <label for="exampleFormControlFile1">Chapter 1</label>
                                            <input class="form-control form-control-lg mb-4 course__subtitle" type="text" placeholder="Type your course title..........." name="chapter_name[]">

                                            <div class="row lessions chapter_1_lessions">
                                                <div class="row lession">
                                                    <div class="col-sm-5">
                                                        <label for="exampleFormControlFile1">Lesson Title</label>
                                                        <input class="form-control form-control-lg mb-4 course__subtitle" type="text" placeholder="Lesson Name" name="lesson_name[]">
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class="form-check form-check-inline text-center radio__wrapp mt-5">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" name="content_type[]" value="text">
                                                                    <label class="form-check-label" for="inlineRadio1">Text</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="form-check form-check-inline text-center radio__wrapp mt-5">
                                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" name="content_type[]" value="video">
                                                                    <label class="form-check-label" for="inlineRadio1">Video</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group text__area__holder mb-4">
                                                        <textarea class="form-control text__big" id="exampleFormControlTextarea1" rows="3" name="lession_text_content[]"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button__holder mb-4">
                                                <button type="button" onclick="addLesson(1)">New lesson +</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group big__button mb-4">
                                        <button type="button" onclick="addNewChapter()">New Chapter +</button>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group text__area__holder">
                                                <label for="exampleFormControlTextarea1">Meta Taitle</label>
                                                <textarea class="form-control text__big" id="exampleFormControlTextarea1" rows="3" name="meta_title"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group text__area__holder">
                                                <label for="exampleFormControlTextarea1">Meta Description</label>
                                                <textarea class="form-control text__big" id="exampleFormControlTextarea1" rows="3" name=" meta_description"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group text__area__holder">
                                                <label for="exampleFormControlTextarea1">Meta Keywords</label>
                                                <textarea class="form-control text__big" id="exampleFormControlTextarea1" rows="3" name=" meta_keywords"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group submit__holder">
                                                <input type="submit" value="Save">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script>
        function addNewChapter() {
            let numberOfChapter = $(".chapter").length
            let x = ++numberOfChapter

            $("#chapters").append(`
                <div class="form-group bg__holder text__area__holder mb-4 chapter">
                    <label for="exampleFormControlFile1">Chapter ${x}</label>
                    <input class="form-control form-control-lg mb-4 course__subtitle" type="text" placeholder="Type your course title..........." name="chapter_name[]">

                    <div class="row lessions chapter_${x}_lessions">
                        <div class="row lession">
                            <div class="col-sm-5">
                                <label for="exampleFormControlFile1">Lesson Title</label>
                                <input class="form-control form-control-lg mb-4 course__subtitle" type="text" placeholder="Lesson Name" name="lesson_name[]">
                            </div>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-check form-check-inline text-center radio__wrapp mt-5">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" name="content_type[]" value="text">
                                            <label class="form-check-label" for="inlineRadio1">Text</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-check form-check-inline text-center radio__wrapp mt-5">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" name="content_type[]" value="video">
                                            <label class="form-check-label" for="inlineRadio1">Video</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text__area__holder mb-4">
                                <textarea class="form-control text__big" id="exampleFormControlTextarea1" rows="3" name="lession_text_content[]"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button__holder mb-4">
                        <button type="button" onclick="addLesson(${x})">New lesson +</button>
                    </div>
                </div>
            `)
        }

        function addLesson(index) {
            $(`.chapter_${index}_lessions`).append(`
                <div class="row lession">
                    <div class="col-sm-5">
                        <label for="exampleFormControlFile1">Lesson Title</label>
                        <input class="form-control form-control-lg mb-4 course__subtitle" type="text" placeholder="Lesson Name" name="lesson_name[]">
                    </div>
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-check form-check-inline text-center radio__wrapp mt-5">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" name="content_type[]" value="text">
                                    <label class="form-check-label" for="inlineRadio1">Text</label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-check form-check-inline text-center radio__wrapp mt-5">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" name="content_type[]" value="video">
                                    <label class="form-check-label" for="inlineRadio1">Video</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text__area__holder mb-4">
                        <textarea class="form-control text__big" id="exampleFormControlTextarea1" rows="3" name="lession_text_content[]"></textarea>
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


                let formdata = new FormData(document.getElementById("form"))
                // formdata.append("category_id"       , data.category_id)
                // formdata.append("course_type"       , data.course_type)
                // formdata.append("title"             , data.title)
                // formdata.append("sub_title"         , data.sub_title)
                // formdata.append("slug"              , data.slug)
                // formdata.append("description"       , data.description)
                // formdata.append("things_to_learn"   , data.things_to_learn)
                // formdata.append("regular_price"     , data.regular_price)
                // formdata.append("selling_price"     , data.selling_price)
                // formdata.append("meta_title"        , data.meta_title)
                // formdata.append("meta_description"  , data.meta_description)
                // formdata.append("meta_keywords"     , data.meta_keywords)
                formdata.append("course_content", JSON.stringify(data.chapters))



                fetch("{{route('instructor_add_course_action')}}", {
                        headers: {
                            "X-Requested-With": "XMLHttpRequest",
                            "X-CSRF-Token": $('input[name="_token"]').val()
                        },
                        method: "POST",
                        body: formdata
                    })
                    .then(response => response.json())
                    .then(data => alert("Success"))
                    .catch(error => console.log(error))
            })
        })
    </script>

    @include("instructor.inc.footer")