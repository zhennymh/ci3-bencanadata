<div class="page-header text-dark d-print-none">
    <div class="row align-items-center">

        <div class="col">
            <h2 class="page-title text-light">
                REST API
            </h2>
        </div>

    </div>
</div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Panduan Penggunaan REST API Bencana</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <h2>GET</h2>
                            <p>Tarik Data</p>
                            <input readonly type="text" class="form-control" value="{base_url}/api/bencana">
                            <br>
                            <p>Tarik Data (berdasarkan ID)</p>
                            <input readonly type="text" class="form-control" value="{base_url}/api/bencana/{id}">
                            <hr>
                        </div>
                        <div class="mb-3">
                            <h2>POST</h2>
                            <p>Tambah Data</p>
                            <input readonly type="text" class="form-control" value="{base_url}/api/bencana">
                        </div>
                        <div class="mb-3">
                            <h2>PUT</h2>
                            <p>Edit Data</p>
                            <input readonly type="text" class="form-control" value="{base_url}/api/bencana/id">
                        </div>
                        <div class="mb-3">
                            <h2>DELETE</h2>
                            <p>Hapus Data</p>
                            <input readonly type="text" class="form-control" value="{base_url}/api/bencana/id">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>