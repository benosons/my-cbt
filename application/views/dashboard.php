<?php if( $this->ion_auth->is_admin() ) : ?>
<div class="row">
    <?php foreach($info_box as $info) : ?>
    <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-<?=$info->box?>">
        <div class="inner">
            <h3><?=$info->total;?></h3>
            <p><?=$info->title;?></p>
        </div>
        <div class="icon">
            <i class="fa fa-<?=$info->icon?>"></i>
        </div>
        <a href="<?=base_url().strtolower($info->view);?>" class="small-box-footer">
            Lihat <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<div class="row">
    <div class="col-lg-6 col-xs-12">
        <canvas id="BugaBagi"></canvas>
    </div>
    <div class="col-lg-6 col-xs-12">
        <canvas id="BlogBugaBagi"></canvas>
    </div>
</div>
            <!-- Diagram -->
            <script type="text/javascript">
				var ctx = document.getElementById("BugaBagi").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'pie',
					data: {
					labels: [<?php foreach($info_box as $info) : ?>"<?=$info->title;?>", <?php endforeach; ?>],
					datasets: [{
						label: 'CBT',
						data:[<?php foreach($info_box as $info) : ?><?=$info->total;?>,<?php endforeach; ?>],
						backgroundColor: [
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
                        'rgba(103, 12, 15, 0.2)',
                        'rgba(93, 133, 155, 0.2)'
						]
					}]
					},
				});
            </script>
            <script type="text/javascript">
				var ctx = document.getElementById("BlogBugaBagi").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'line',
					data: {
					labels: [<?php foreach($info_box as $info) : ?>"<?=$info->title;?>", <?php endforeach; ?>],
					datasets: [{
						label: 'CBT',
						data:[<?php foreach($info_box as $info) : ?><?=$info->total;?>,<?php endforeach; ?>]
					}]
					},
				});
            </script>
            <!-- End-Diagram -->
<?php elseif( $this->ion_auth->in_group('penguji') ) : ?>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Informasi Akun</h3>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>Nama</th>
                    <td><?=$dosen->nama_dosen?></td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td><?=$dosen->nip?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$dosen->email?></td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td><?=$dosen->nama_kategori?></td>
                </tr>
                <tr class="hide">
                    <th>Mata Kuliah</th>
                    <td><?=$dosen->nama_matkul?></td>
                </tr>
                <tr class="hide">
                    <th>Daftar Kelas</th>
                    <td>
                        <ol class="pl-4">
                        <?php foreach ($kelas as $k) : ?>
                            <li><?=$k->nama_kelas?></li>
                        <?php endforeach;?>
                        </ol>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-8 hide">
        <div class="box box-solid">
            <div class="box-header bg-purple">
                <h3 class="box-title">Pemberitahuan</h3>
            </div>
            <div class="box-body">
                <p>Computer Based Test Kampus dikembangkan oleh  Muhammad Ghifari Arfananda dan didistribusikan kembali oleh BlogBugaBagi</p>
                <center>
                <a href="http://blogbugabagi.blogspot.com" target="_blank" rel="noopener noreferrer">
                    <img src="<?= base_url('assets/dist/img/b.png') ?>" width="30%" alt="" srcset="">
                    <img src="<?= base_url('assets/dist/img/bbb.png') ?>" width="30%" alt="" srcset="">
                </a>
                </center>
            </div>
        </div>
    </div>
</div>

<?php else : ?>

<div class="row">
    <div class="col-sm-12">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Informasi Akun</h3>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>Telepon</th>
                    <td><?=$mahasiswa->nim?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><?=$mahasiswa->nama?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?=$mahasiswa->jenis_kelamin === 'L' ? "Laki-laki" : "Perempuan" ;?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$mahasiswa->email?></td>
                </tr>
                <tr class="hide">
                    <th>Jurusan</th>
                    <td><?=$mahasiswa->nama_jurusan?></td>
                </tr>
                <tr class="hide">
                    <th>Kelas</th>
                    <td><?=$mahasiswa->nama_kelas?></td>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <td><?=$mahasiswa->nama_kategori?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-8 hide">
        <div class="box box-solid">
            <div class="box-header bg-purple">
                <h3 class="box-title">Pemberitahuan</h3>
            </div>
            <div class="box-body">
                <p>Computer Based Test Kampus dikembangkan oleh  Muhammad Ghifari Arfananda dan didistribusikan kembali oleh BlogBugaBagi</p>
                <center>
                <a href="http://blogbugabagi.blogspot.com" target="_blank" rel="noopener noreferrer">
                    <img src="<?= base_url('assets/dist/img/b.png') ?>" width="30%" alt="" srcset="">
                    <img src="<?= base_url('assets/dist/img/bbb.png') ?>" width="30%" alt="" srcset="">
                </a>
                </center>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>