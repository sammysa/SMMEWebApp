@extends('layouts.header')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1 class="text-black">Entrepreneurs Support List 2021</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i> Shortlist</li>
        </ol>
    </div>
    <div class="content">
    <div class="info-box">
        <h4 class="text-black">Full SMME Support List</h4>
        <!-- <p>Export data to Copy, CSV, Excel, PDF & Print</p> -->
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                <thead>
                <tr>
                    <th>ID #</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>SMME/Startup Name</th>
                    <th>Services or Product</th>
                    <th>Support Needed</th>
                    <th>Expand on Support Needed</th>
                    <th>City</th>
                    <th>Province</th>
                    <th>View Details</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($shortlists as $smme => $value)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $value->first_name }}</td>
                    <td>{{ $value->last_name }}</td>
                    <td>{{ $value->startup_name }}</td>
                    <td>{{ $value->service_product }}</td>
                    <td>{{ $value->support_needed }}</td>
                    <td>{{ $value->support_expand }}</td>
                    <td>{{ $value->city }}</td>
                    <td>{{ $value->province }}</td>
                    <td>
                        <form action="" method="POST">

                            <a href="" title="show">
                                <i class="fas fa-eye text-success  fa-lg"></i>
                            </a>

                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>ID #</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>SMME/Startup Name</th>
                    <th>Services/Product</th>
                    <th>Support Needed</th>
                    <th>Expand on Support Needed</th>
                    <th>City</th>
                    <th>Province</th>
                    <th>View Details</th>
                </tr>
                </tfoot>
            </table>
            {!! $shortlists->links() !!}
        </div>
    </div>
</div>
</div>
@endsection
