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
                <div class="form-body">
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content">
                                <div class="form-items">
                                    <h3>Post a job</h3>
                                    <p>Fill in the data below.</p>
                                    <form class="requires-validation" method="post" action="{{ route('job.create') }}">
                                        @csrf
            
                                        <div class="col-md-12">
                                           <input class="form-control  @error('job_title') border border-danger  @enderror" type="text" name="job_title" placeholder="Job title">
                                           <div class="text-danger">
                                                @error('job_title')
                                                    {{ $message }}
                                                @enderror
                                           </div>
                                        </div>
            
                                        <div class="col-md-12" style="margin-top: 21.9px">
                                             <textarea name="job_desc" id="" cols="30" rows="10" class="form-control" placeholder="Job Description..."></textarea>
                                        </div>
            
                                       <div class="col-md-12">
                                            <select name="work_from" class="form-select mt-3  @error('work_from') border border-danger  @enderror">
                                                  <option selected disabled value="">Position</option>
                                                  <option value="remote">Remote</option>
                                                  <option value="on_site">On-site</option>
                                                  <option value="hybrid">Hybrid</option>
                                           </select>
                                            <div class="text-danger">
                                                @error('work_from')
                                                    {{ 'This field is required' }}
                                                @enderror
                                            </div>
                                       </div>
                                       <div class="col-md-12">
                                            <select name="job_type" class="form-select mt-3  @error('job_type') border border-danger  @enderror">
                                                <option selected disabled value="">Job type</option>
                                                <option value="part-time">Part-time</option>
                                                <option value="full-time">Full-time</option>
                                            </select>
                                            <div class="text-danger">
                                                @error('job_type')
                                                    {{ 'This field is required' }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control  @error('salary') border border-danger  @enderror" type="text" name="salary" placeholder="Salary">
                                            <div class="text-danger">
                                                @error('salary')
                                                    {{ 'This field is required' }}
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                                        <label class="form-check-label">I confirm that all data are correct</label>
                                        <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                                        </div>
                              
            
                                        <div class="form-button mt-3">
                                            <button type="submit" type="submit" class="btn btn-primary">Post</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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