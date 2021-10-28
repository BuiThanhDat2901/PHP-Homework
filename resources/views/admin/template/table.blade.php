@extends('admin.layout.master')
@section('title', 'Table page | Admin')
@section('breadcrumb')
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    <form role="search" class="sr-input-func">
                                        <input type="text" placeholder="Search..." class="search-int form-control">
                                        <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="#">Demo</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Table</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
@endsection
@section('content')
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="product-status-wrap drp-lst">
                            <h4>Table</h4>

                            <div class="asset-inner">
                                <table class="table-mailbox">
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Task</th>
                                        <th data-field="email" data-editable="true">Email</th>
                                        <th data-field="phone" data-editable="true">Phone</th>
                                        <th data-field="complete">Completed</th>
                                        <th data-field="task" data-editable="true">Task</th>
                                        <th data-field="date" data-editable="true">Date</th>
                                        <th data-field="price" data-editable="true">Price</th>
                                        <th data-field="action">Action</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>1</td>
                                        <td>Web Development</td>
                                        <td>admin@uttara.com</td>
                                        <td>+8801962067309</td>
                                        <td class="datatable-ct"><span class="pie">1/6</span>
                                        </td>
                                        <td>10%</td>
                                        <td>Jul 14, 2017</td>
                                        <td>$5455</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>2</td>
                                        <td>Graphic Design</td>
                                        <td>fox@itpark.com</td>
                                        <td>+8801762067304</td>
                                        <td class="datatable-ct"><span class="pie">230/360</span>
                                        </td>
                                        <td>70%</td>
                                        <td>fab 2, 2017</td>
                                        <td>$8756</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>3</td>
                                        <td>Software Development</td>
                                        <td>gumre@hash.com</td>
                                        <td>+8801862067308</td>
                                        <td class="datatable-ct"><span class="pie">0.42/1.461</span>
                                        </td>
                                        <td>5%</td>
                                        <td>Seb 5, 2017</td>
                                        <td>$9875</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>4</td>
                                        <td>Woocommerce</td>
                                        <td>kyum@frok.com</td>
                                        <td>+8801962066547</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>Oct 10, 2017</td>
                                        <td>$3254</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>5</td>
                                        <td>Joomla</td>
                                        <td>jams@game.com</td>
                                        <td>+8801962098745</td>
                                        <td class="datatable-ct"><span class="pie">200,133</span>
                                        </td>
                                        <td>80%</td>
                                        <td>Nov 20, 2017</td>
                                        <td>$58745</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>6</td>
                                        <td>Wordpress</td>
                                        <td>flat@yem.com</td>
                                        <td>+8801962254781</td>
                                        <td class="datatable-ct"><span class="pie">0.42,1.051</span>
                                        </td>
                                        <td>30%</td>
                                        <td>Aug 25, 2017</td>
                                        <td>$789879</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>7</td>
                                        <td>Ecommerce</td>
                                        <td>hasan@wpm.com</td>
                                        <td>+8801962254863</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>July 17, 2017</td>
                                        <td>$21424</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>8</td>
                                        <td>Android Apps</td>
                                        <td>ATM@devep.com</td>
                                        <td>+8801962875469</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>June 11, 2017</td>
                                        <td>$78978</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>9</td>
                                        <td>Prestashop</td>
                                        <td>presta@Prest.com</td>
                                        <td>+8801962067524</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>May 9, 2017</td>
                                        <td>$45645</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>10</td>
                                        <td>Game Development</td>
                                        <td>Dev@game.com</td>
                                        <td>+8801962067457</td>
                                        <td class="datatable-ct"><span class="pie">2,7</span>
                                        </td>
                                        <td>15%</td>
                                        <td>April 5, 2017</td>
                                        <td>$4564545</td>
                                        <td class="datatable-ct"><i class="fa fa-check"></i>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div>
                                        <div style="margin: 35px 0 0">Showing 1 to 10 of 21 entries
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="custom-pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-pre"><a href="#">‹</a></li>
                                                <li class="page-number active"><a href="#">1</a></li>
                                                <li class="page-number"><a href="#">2</a></li>
                                                <li class="page-number"><a href="#">3</a></li>
                                                <li class="page-next"><a href="#">›</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
