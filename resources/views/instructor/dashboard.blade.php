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
                    <th>Courses Name</th>
                    <th>Courses Type</th>
                    <th>Courses Category</th>
                    <th>Courses Status</th>
                    <th style="text-align: center; width: 100px">
                      Courses Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Alphabet puzzle</td>
                    <td>2016/01/15</td>
                    <td>Done</td>
                    <td>1000</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Layout for poster</td>
                    <td>2016/01/31</td>
                    <td>Planned</td>
                    <td>1834</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Image creation</td>
                    <td>2016/01/23</td>
                    <td>To Do</td>
                    <td>1500</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Create font</td>
                    <td>2016/02/26</td>
                    <td>Done</td>
                    <td>1200</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Sticker production</td>
                    <td>2016/02/18</td>
                    <td>Planned</td>
                    <td>2100</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Glossy poster</td>
                    <td>2016/03/17</td>
                    <td>To Do</td>
                    <td>899</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Beer label</td>
                    <td>2016/05/28</td>
                    <td>Confirmed</td>
                    <td>2499</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Shop sign</td>
                    <td>2016/04/19</td>
                    <td>Offer</td>
                    <td>1099</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>X-Mas decoration</td>
                    <td>2016/10/31</td>
                    <td>Confirmed</td>
                    <td>1750</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Halloween invite</td>
                    <td>2016/09/12</td>
                    <td>Planned</td>
                    <td>400</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Wedding announcement</td>
                    <td>2016/07/09</td>
                    <td>To Do</td>
                    <td>299</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Member pasport</td>
                    <td>2016/06/22</td>
                    <td>Offer</td>
                    <td>149</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Drink tickets</td>
                    <td>2016/11/01</td>
                    <td>Confirmed</td>
                    <td>199</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Album cover</td>
                    <td>2017/03/15</td>
                    <td>To Do</td>
                    <td>4999</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Shipment box</td>
                    <td>2017/02/08</td>
                    <td>Offer</td>
                    <td>1399</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>16</td>
                    <td>Wooden puzzle</td>
                    <td>2017/01/11</td>
                    <td>Done</td>
                    <td>1000</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Fashion Layout</td>
                    <td>2016/01/30</td>
                    <td>Planned</td>
                    <td>1834</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Toy creation</td>
                    <td>2016/01/10</td>
                    <td>To Do</td>
                    <td>1550</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Create stamps</td>
                    <td>2016/02/26</td>
                    <td>Done</td>
                    <td>1220</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>Sticker design</td>
                    <td>2017/02/18</td>
                    <td>Planned</td>
                    <td>2100</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>Poster rock concert</td>
                    <td>2017/04/17</td>
                    <td>To Do</td>
                    <td>899</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>Wine label</td>
                    <td>2017/05/28</td>
                    <td>Confirmed</td>
                    <td>2799</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>Shopping bag</td>
                    <td>2017/04/19</td>
                    <td>Offer</td>
                    <td>1299</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>24</td>
                    <td>Decoration for Easter</td>
                    <td>2017/10/31</td>
                    <td>Confirmed</td>
                    <td>1650</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td>Saint Nicolas colorbook</td>
                    <td>2017/09/12</td>
                    <td>Planned</td>
                    <td>510</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td>Wedding invites</td>
                    <td>2017/07/09</td>
                    <td>To Do</td>
                    <td>399</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>27</td>
                    <td>Member pasport</td>
                    <td>2017/06/22</td>
                    <td>Offer</td>
                    <td>249</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>28</td>
                    <td>Drink tickets</td>
                    <td>2017/11/01</td>
                    <td>Confirmed</td>
                    <td>199</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td>Blue-Ray cover</td>
                    <td>2018/03/15</td>
                    <td>To Do</td>
                    <td>1999</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>30</td>
                    <td>TV carton</td>
                    <td>2019/02/08</td>
                    <td>Offer</td>
                    <td>1369</td>
                    <td class="d-flex">
                      <button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right: 16px">
                        <span class=""><i class="fa-solid fa-pen"></i></span>
                      </button>
                      <button type="button" class="btn btn-danger btn-xs dt-delete">
                        <span><i class="fa-solid fa-trash"></i></span>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include("instructor.inc.footer")