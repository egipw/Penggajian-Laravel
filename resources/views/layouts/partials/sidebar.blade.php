<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Home</span></a></li>
            <li><a href="{{ url('pegawai') }}" title="Data Pegawai"><i class='fa fa-user'></i> <span>Data Pegawai</span></a></li>
            
            <li class="treeview">
                <a href="#"><i class='fa fa-table'></i> <span>Absensi</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('tunjangan') }}">Data Kehadiran Pegawai</a></li>
                    <li><a href="{{ url('gajian') }}">Input Kehadiran Pegawai</a></li>
                    
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-money'></i> <span>Gapok dan Tunjangan</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('gapok') }}">Gaji Pokok</a></li>
                    <li><a href="{{ url('tunjangan_keluarga') }}">Tunjangan Keluarga</a></li>
                    <li><a href="{{ url('tunjangan_kesehatan') }}">Tunjangan Kesehatan</a></li>
                    <li><a href="{{ url('tunjangan_fungsional') }}">Tunjangan Fungsional</a></li>
                    <li><a href="{{ url('tunjangan_jabatan') }}">Tunjangan Jabatan</a></li>
                    <li><a href="{{ url('tunjangan_gtt') }}">Tunjangan GTT</a></li>
                    <li><a href="{{ url('tunjangan_pensiun') }}">Tunjangan Pensiun</a></li>
                    <li><a href="{{ url('jenistunjangan') }}">Tunjangan Lain</a></li>
                    <li><a href="{{ url('potongan') }}">Potongan Gaji Lain</a></li>
        
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-money'></i> <span>Honor Gaji</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('honor') }}">Data Honor Gaji</a></li>
                    <li><a href="{{ url('create3') }}">Input Honor gaji</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-file-text-o'></i> <span>Data Laporan</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('laporan_aktif') }}">Pegawai Aktif</a></li>
                    <li><a href="{{ url('#') }}">Pegawai Tidak Aktif</a></li>
                    <li><a href="{{ url('#') }}">Pegawai Cuti</a></li>
                </ul>
            </li>

            <li><a href="{{ url('laporan') }}" title="Data Pegawai"><i class='fa fa-file-text-o'></i> <span>Laporan</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
