@extends('layout.king')
@section('content')

<div id="layoutSidenav">
     <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Data</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Reservasi
                        </a>
                    </div>
                </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Reservasi
                            </div>
                            <div class="card-body">
                                <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                    <div class="dataTable-top">
                                        <div class="dataTable-search">
                                            <input type="date" class="dataTable-input">
                                        </div>
                                    </div>
                                </div>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nama Tamu</th>
                                            <th>Tanggal Check In</th>
                                            <th>Tanggal Check Out</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Tamu</th>
                                            <th>Tanggal Check In</th>
                                            <th>Tanggal Check Out</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach( $reservations as $reservation )
                                        <tr>
                                            <td>{{ $reservation->nama_tamu }}</td>
                                            <td>{{ $reservation->tgl_check_in }}</td>
                                            <td>{{ $reservation->tgl_check_out }}</td>
                                            <td>
                                                <button onclick="disableBtn()" id="checkIn" class="btn btn-primary">Check In</button>
                                                <script>
                                                    function disableBtn() {
                                                    document.getElementById("checkIn").disabled = true;
                                                    }
                                                </script>
                                            </td>
                                            <td>
                                                
                                            </td>
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
                        </div>
                    </div>
                </footer>
            </div>
        </div>
@endsection