<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }

                    echo "<h5>Total Belanja Anda: Rp. ". number_format($grand_total,0,',','.');
                 ?>
            </div><br><br>
            <h3>Input Email dan Pembayaran</h3>
            <?php echo $this->session->flashdata('pesan') ?>
            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                    <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Alamat Email</label>
                    <input type="text" name="alamat" placeholder="Alamat Email Anda"class="form-control"> 
                    <?php echo form_error('alamat','<div class="text-danger small ml-2">','</div>'); ?>
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_tlp" placeholder="Nomor Telepon Anda"class="form-control">
                    <?php echo form_error('no_tlp','<div class="text-danger small ml-2">','</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Domisili</label>
                    <input type="text" name="email" placeholder="Domisili Anda"class="form-control">
                    <?php echo form_error('email','<div class="text-danger small ml-2">','</div>'); ?>
                </div>

                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select class="form-control">
                        <option>BCA - XXXXXXX</option>
                        <option>BNI - XXXXXXX</option>
                        <option>BRI - XXXXXXX</option>
                        <option>Mandiri - XXXXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
        
            </form>
            <?php 
        }else{
                echo "<h5>Keranjang Belanja Anda Masih Kosong";
            } ?>

        </div>        
        <div class="col-md-2"></div>
    </div>
</div>