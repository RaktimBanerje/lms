@include("instructor.inc.header")

<div class="main_content_iner overly_inner">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12">
        <div class="page_title_box d-flex align-items-center justify-content-between">
          <div class="page_title_left">
            <h3 class="f_s_30 f_w_700 text_white">Courses</h3>
          </div>
          <a href="{{route('instructor_add_course')}}" class="white_btn3">New Courses</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 card_height_100">
        <div class="white_card mb_20">
          <div class="white_card_header">
            <div class="box_header m-0">
              <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Regular Price</th>
                    <th>Selling Price</th>
                    <th style="text-align: center; width: 100px">
                      Courses Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @php $i = 0; @endphp    
                    @foreach($courses as $course) @php $i++; @endphp
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$course->title}}</td>
                            <td></td>
                            <td>{{$course->course_type}}</td>
                            <td>{{$course->regular_price}}</td>
                            <td>{{$course->selling_price}}</td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                                    <span class=""><i class="fa-solid fa-pen"></i></span>
                                </button>
                                <button type="button" class="btn btn-danger btn-xs dt-delete">
                                    <span><i class="fa-solid fa-trash"></i></span>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include("instructor.inc.footer")