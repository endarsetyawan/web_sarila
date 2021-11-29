@extends('admin.templateadmin')
@section('title', 'Data User')

@section('content')
    @include('admin.includes.sidebar-mobile')
    {{-- search --}}
    <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="breadcome-menu">
                                    <li><a href="/admin">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">@yield('title') </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end search --}}
    {{-- content --}}
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>
                                    @yield('title')
                                </h1>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                                {{-- modal --}}<a class="Primary mg-b-10 btn btn-sm btn-danger" href="#"
                                    data-toggle="modal" data-target="#PrimaryModalhdbgcl">Add User <span><i
                                            class="fa fa-plus"></i></span></a>
                                <div id="PrimaryModalhdbgcl"
                                    class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header header-color-modal bg-color-4">
                                                <h4 class="modal-title">Add User</h4>
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i
                                                            class="fa fa-close"></i></a>
                                                </div>
                                            </div>
                                            <div class="modal-body">
                                                <div class="sparkline12-graph">
                                                    <div class="basic-login-form-ad">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="all-form-element-inner">
                                                                    <form action="#">
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <label
                                                                                        class="login2 pull-right pull-right-pro">Username</label>
                                                                                </div>
                                                                                <div class="col-lg-8">
                                                                                    <input type="text"
                                                                                        class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <label
                                                                                        class="login2 pull-right pull-right-pro">Password</label>
                                                                                </div>
                                                                                <div class="col-lg-8">
                                                                                    <input type="password"
                                                                                        class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <label
                                                                                        class="login2 pull-right pull-right-pro">Nama Lengkap
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-lg-8">
                                                                                    <input type="text"
                                                                                        class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <label
                                                                                        class="login2 pull-right pull-right-pro">Unit</label>
                                                                                </div>
                                                                                <div class="col-lg-8">
                                                                                    <input type="text"
                                                                                        class="form-control" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group-inner">
                                                                            <div class="login-btn-inner">
                                                                                <div class="row">
                                                                                    <div class="col-lg-4"></div>
                                                                                    <div class="col-lg-8">
                                                                                        <div
                                                                                            class="login-horizental cancel-wp pull-left">
                                                                                            <button class="btn btn-white"
                                                                                                type="submit">Cancel</button>
                                                                                            <button
                                                                                                class="btn btn-sm btn-primary login-submit-cs"
                                                                                                type="submit">Save
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- end modal --}}
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                    data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id">ID</th>
                                            <th data-field="name" data-editable="true">Project</th>
                                            <th data-field="email" data-editable="true">Email</th>
                                            <th data-field="phone" data-editable="true">Phone</th>
                                            <th data-field="company" data-editable="true">Company</th>
                                            <th data-field="complete">Completed</th>
                                            <th data-field="task" data-editable="true">Task</th>
                                            <th data-field="date" data-editable="true">Date</th>
                                            <th data-field="price" data-editable="true">Price</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>1</td>
                                            <td>Web Development</td>
                                            <td>admin@uttara.com</td>
                                            <td>+8801962067309</td>
                                            <td>Aber Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">1/6</span>
                                            </td>
                                            <td>10%</td>
                                            <td>Jul 14, 2018</td>
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
                                            <td>Abitibi Inc.</td>
                                            <td class="datatable-ct"><span class="pie">230/360</span>
                                            </td>
                                            <td>70%</td>
                                            <td>fab 2, 2018</td>
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
                                            <td>Acambis plc</td>
                                            <td class="datatable-ct"><span class="pie">0.42/1.461</span>
                                            </td>
                                            <td>5%</td>
                                            <td>Seb 5, 2018</td>
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
                                            <td>ACLN Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Oct 10, 2018</td>
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
                                            <td>ACS-Tech Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">200,133</span>
                                            </td>
                                            <td>80%</td>
                                            <td>Nov 20, 2018</td>
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
                                            <td>ActFits.com Inc.</td>
                                            <td class="datatable-ct"><span class="pie">0.42,1.051</span>
                                            </td>
                                            <td>30%</td>
                                            <td>Aug 25, 2018</td>
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
                                            <td>ActivCard S.A.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>July 17, 2018</td>
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
                                            <td>Adecco S.A.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>June 11, 2018</td>
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
                                            <td>AEGON N.V.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>May 9, 2018</td>
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
                                            <td>Aerco Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>April 5, 2018</td>
                                            <td>$4564545</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>11</td>
                                            <td>Angular Js</td>
                                            <td>gular@angular.com</td>
                                            <td>+8801962067124</td>
                                            <td>Agrium Inc.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Dec 1, 2018</td>
                                            <td>$645455</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>12</td>
                                            <td>Opencart</td>
                                            <td>open@cart.com</td>
                                            <td>+8801962067587</td>
                                            <td>Air Canada</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Jan 6, 2018</td>
                                            <td>$78978</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>13</td>
                                            <td>Education</td>
                                            <td>john@example.com</td>
                                            <td>+8801962067471</td>
                                            <td>Alcan Inc.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Feb 6, 2016</td>
                                            <td>$456456</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>14</td>
                                            <td>Construction</td>
                                            <td>mary@example.com</td>
                                            <td>+8801962012457</td>
                                            <td>Alcatel</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Jan 6, 2016</td>
                                            <td>$87978</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>15</td>
                                            <td>Real Estate</td>
                                            <td>july@example.com</td>
                                            <td>+8801962067309</td>
                                            <td>Alstom</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Dec 1, 2016</td>
                                            <td>$454554</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>16</td>
                                            <td>Personal Regume</td>
                                            <td>john@example.com</td>
                                            <td>+8801962067306</td>
                                            <td>Altarex Corp.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>May 9, 2016</td>
                                            <td>$564555</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>17</td>
                                            <td>Admin Template</td>
                                            <td>mary@example.com</td>
                                            <td>+8801962067305</td>
                                            <td>Alvarion Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>June 11, 2016</td>
                                            <td>$454565</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>18</td>
                                            <td>FrontEnd</td>
                                            <td>july@example.com</td>
                                            <td>+8801962067304</td>
                                            <td>Amcor Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>May 9, 2015</td>
                                            <td>$456546</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>19</td>
                                            <td>Backend</td>
                                            <td>john@range.com</td>
                                            <td>+8801962067303</td>
                                            <td>Amdocs Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Feb 9, 2014</td>
                                            <td>$564554</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>20</td>
                                            <td>Java Advance</td>
                                            <td>lamon@ghs.com</td>
                                            <td>+8801962067302</td>
                                            <td>Amersham plc</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>July 6, 2014</td>
                                            <td>$789889</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>21</td>
                                            <td>Jquery Advance</td>
                                            <td>hasad@uth.com</td>
                                            <td>+8801962067301</td>
                                            <td>Amvescap plc</td>
                                            <td class="datatable-ct"><span class="pie">2,7</span>
                                            </td>
                                            <td>15%</td>
                                            <td>Jun 6, 2013</td>
                                            <td>$4565656</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end content --}}
@endsection
