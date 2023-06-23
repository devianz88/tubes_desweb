<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jual Voucher Game</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
            <h2 class="text-center my-4">Transaksi Berhasil</h2>
            <div class="mb-3 mx-5">
                <label for="id" class="form-label">No. Transaksi</label>
                <input class="form-control" type="text" disabled readonly>
            </div>
            <div class="mb-3 mx-5">
                <label for="namaOutput" class="form-label">Nama</label>
                <input class="form-control" type="text" id="namaOutput" disabled readonly>
            </div>
            <div class="mb-3 mx-5">
                <label for="emailOutput" class="form-label">Email</label>
                <input class="form-control" type="email" id="emailOutput" disabled readonly>
            </div>
            <div class="mb-3 mx-5">
                <label for="kode" class="form-label">Kode Referal</label>
                <input class="form-control" type="text" disabled readonly>
            </div>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <a class="btn btn-primary" href="V_home.html" role="button">Kembali ke Home</a>
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
        
        <!-- Menampilkan nama -->
        <script>
            // Mengambil nilai yang tersimpan dari Local Storage
            var namaValue = localStorage.getItem('namaValue');
        
            // Select output element
            var outputNama = document.getElementById('namaOutput');
        
            // Set nilai sebagai isian dari output element
            outputNama.value = namaValue;
        
            // Menghapus nilai yang tersimpan dari Local Storage (opsional)
            localStorage.removeItem('namaValue');
        </script>

        <!-- Menampilkan email -->
        <script>
            // Mengambil nilai yang tersimpan dari Local Storage
            var emailValue = localStorage.getItem('emailValue');
        
            // Select output element
            var outputEmail = document.getElementById('emailOutput');
        
            // Set nilai sebagai isian dari output element
            outputEmail.value = emailValue;
        
            // Menghapus nilai yang tersimpan dari Local Storage (opsional)
            localStorage.removeItem('emailValue');
        </script>
    </body>
</html>