<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jual Voucher Game</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            .card.active {
              background-color: #00b7ff; /* Ganti dengan warna yang diinginkan */
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand ms-3" href="V_home.html">IsiVoucher</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item ms-2">
                                <a class="nav-link" aria-current="page" href="V_home.html">Home</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link" href="V_home.html#tentangkita">About Us</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a class="nav-link" href="V_faq.html">FAQ</a>
                            </li>
                        </ul>
                        <a class="btn btn-primary ml-auto" href="V_contact.html" role="button">Contact Us</a>
                    </div>
                </div>
            </nav>
        </header>
        
        <section>
            <h2 class="text-center my-4">Transaksi</h2>
            <form action="V_success.html" method="GET">
                <div class="mb-3 mx-5">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-3 mx-5">
                    <label for="telp" class="form-label">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="telp" placeholder="Masukkan nomor telepon Anda">
                </div>
                <div class="mb-3 mx-5">
                    <label for="email1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                </div>
                <div class="mb-3 mx-5">
                    <label for="tagihan" class="form-label">Tagihan</label>
                    <input class="form-control" type="text" id="selectedValue" disabled readonly>
                </div>
            </form>
        </section>

        <section>
            <h2 class="text-center my-4">Metode Pembayaran</h2>
            <div class="container text-center mt-5">
                <div class="row justify-content-center">
                    <div class="col col-lg-2">
                        <div class="card" data-value="ovo" style="width: 10rem;">
                            <div class="card-body text-center">
                                <img src="assets/icons/ovo.png" style="width: 50px;">
                                <h5 class="card-title mt-1">OVO</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2">
                        <div class="card" data-value="gopay" style="width: 10rem;">
                            <div class="card-body text-center">
                                <img src="assets/icons/gopay.png" style="width: 50px;">
                                <h5 class="card-title mt-1">GoPay</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2">
                        <div class="card" data-value="spay" style="width: 10rem;">
                            <div class="card-body text-center">
                                <img src="assets/icons/spay.png" style="width: 50px;">
                                <h5 class="card-title mt-1">ShopeePay</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center mt-4">
                <div class="row justify-content-center">
                    <div class="col col-lg-2">
                        <div class="card" data-value="linkaja" style="width: 10rem;">
                            <div class="card-body text-center">
                                <img src="assets/icons/linkaja.png" style="width: 50px;">
                                <h5 class="card-title mt-1">LinkAja</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2">
                        <div class="card" data-value="dana" style="width: 10rem;">
                            <div class="card-body text-center">
                                <img src="assets/icons/dana.png" style="width: 50px;">
                                <h5 class="card-title mt-1">Dana</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <a class="btn btn-primary" href="V_success.html" role="button">Bayar</a>
                </div>
            </div>
        </section>
        <?php echo "<h1>" . $title . "</h1>";?>
	<table id="customers">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Nomor Telpon</th>
			<th></th>
		</tr>
		<?php
$cacah=1;
		echo "<a href='createForm'><button>Create</button></a>";
		foreach ($data as $data){
		?>
		<tr>
			<td><?= $cacah ?> </td>
			<td><?= $data->nama ?> </td>
			<td><?= $data->email?> </td> 
			<td><?= $data->nohp ?> </td> 
			<td>
			<a href="<?php echo base_url('/index.php/C_Pesan/updateForm/'). $data->user_id ?>"><button>Update</button></a>
			<a href="<?php echo site_url('C_Pesan/delete/'). $data->user_id ?>"><button>Delete</button></a>
			</td>
		</tr>
		<?php
			$cacah++;
		}	
		?>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        
        <!-- Menampilkan value harga topup yang dipilih -->
        <script>
            var selectedValue = localStorage.getItem('selectedValue');
            document.getElementById('selectedValue').value = selectedValue;
        </script>

        <!-- Mengambil metode pembayaran yang dipilih -->
        <script>
            var selectedCard = null;
          
            document.querySelectorAll('.card').forEach(function(card) {
              card.addEventListener('click', function() {
                if (selectedCard) {
                  selectedCard.classList.remove('active');
                }
          
                selectedCard = this;
                selectedCard.classList.add('active');
                
                var value = selectedCard.getAttribute('data-value');
                localStorage.setItem('selectedValue2', value);
                console.log('Selected Value:', value);
              });
            });
        </script>

        <!-- Mengambil isian form untuk nama -->
        <script>
            // Select input element
            var inputNama = document.getElementById('nama');
        
            // Menambah event listener ke dalam input element
            inputNama.addEventListener('input', function() {
                // Mengambil nilai dari input
                var namaValue = inputNama.value;
        
                // Menyimpan nilai ke Local Storage
                localStorage.setItem('namaValue', namaValue);
            });
        </script>

        <!-- Mengambil isian form untuk email -->
        <script>
            // Select input element
            var inputEmail = document.getElementById('email');
        
            // Menambah event listener ke dalam input element
            inputEmail.addEventListener('input', function() {
                // Mengambil nilai dari input
                var emailValue = inputEmail.value;
        
                // Menyimpan nilai ke Local Storage
                localStorage.setItem('emailValue', emailValue);
            });
        </script>
    </body>
</html>