@extends('layouts.app')


@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        {{ auth()->user()->username . "'s" }} Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="{{ route('jobs') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Your jobs
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <a class="nav-link collapsed" href="{{ route('job.create') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Post a job
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="{{ route('employer.dashboard.tables') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4" style="background-color:#3e3e3e">
                <h1 class="mt-4">Jobs</h1>
                <div class="card mb-4">
                    <div class="card-body">
                        This is where you can manage your jobs
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Yout jobs
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Job Description</th>
                                    <th scope="col">Work from:</th>
                                    <th scope="col">Job type</th>
                                    <th scope="col">Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr>
                                        <td>{{ $job->job_title }}</td>
                                        <td>{{ $job->job_description }}</td>
                                        <td>{{ $job->work_from }}</td>
                                        <td>{{ $job->job_type }}</td>
                                        <td>{{ $job->salary }}</td>
                                    </tr>  
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>     
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2022</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@endsection