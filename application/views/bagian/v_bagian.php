<?php 
/*
    $this->load->view('templates/header_bagian', $title);
		$this->load->view('templates/navbar_bagian');
    $this->load->view('templates/sidebar_bagian');

?>

 <!-- page content -->
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_right">
                <h2>Bagian > <small>Data Bagian</small></h2>
              </div>
            </div>

            
            <div class="clearfix"></div>
            <div class="mb-2">
                <?php if ($this->session->flashdata('message')) :
                  echo $this->session->flashdata('message');
                endif; ?>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data ><small> Bagian</small> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="15%">Nama Bagian</th>
                          <th width="10%">Username bagian</th>
                          <th width="15%">Nama</th>
                          <th width="10%">Tanggal Lahir</th>
                          <th width="20%">Alamat</th>
                          <th width="10%">No HP</th>
                          <th width="15%">Aksi</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      <?php foreach ($data_bagian as $bagian) :?>
                        <tr>
                            <td><?= $bagian->nama_bagian ?></td>
                            <td><?= $bagian->username_admin_bagian ?></td>
                            <td><?= $bagian->nama_lengkap ?></td>
                            <td><?= $bagian->tanggal_lahir_bagian ?></td>
                            <td><?= $bagian->alamat ?></td>
                            <td><?= $bagian->no_hp_bagian ?></td>
                            <td style="text-align:center;">
                              <a href="<?= base_url('bagian/detailBagian/'.$bagian->id_bagian) ?>"><button type="button" title="Detail Bagian" class="btn btn-info btn-xs"><i class="fa fa-file-image-o"></i></button></a>
                              </td>
                        </tr>
                      <?php endforeach;?>
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php
  $this->load->view('templates/footer_bagian');
?>
