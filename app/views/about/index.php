<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $data['title']; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 text-right">
                        Nama : Muhammad Noor Arib
                    </div>
                    <div class="col-md-10 text-left">
                        <?= $data['nama']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 text-right">
                        NPM : 2110010434
                    </div>
                    <div class="col-md-10 text-left">
                        <?= $data['no_hp']; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 text-right">
                        Kelas : 5D Reguler Pagi TI Banjarmasin
                    </div>
                    <div class="col-md-10 text-left">
                        <?= $data['alamat']; ?>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->