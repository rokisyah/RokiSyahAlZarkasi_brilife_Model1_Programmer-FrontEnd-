<div class="">
            <div class="page-title">
              <div class="title_left">
                <h3 style="color: #3B3C3C">Data Pemakai Kontrasepsi</h3>
              </div>
            </div>

            <div class="clearfix" style="padding-bottom: 20px"></div>
            
            <div class="col-md-10">
              <input type="text" name="" id="search" class="form-control" style="border-radius: 20px">
            </div>
            <div class="col-md-2">
              <button class="btn btn-success form-control" data-toggle="modal" data-target=".add" style="border-radius: 20px; background: #00FFFF; color: #3B3C3C">Tambah Data</button>              
            </div>
            <div class="col-md-2">
            <button onclick="location.href='<?php echo base_url();?>LaporanPdf/PemakaiKontrasepsi'">Laporan PDF</button>
            </div>
            <div class="clearfix" style="padding-bottom: 20px"></div>
            <table id="datatable" class="table table-bordered-bottom" style="color: #3B3C3C;">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Id List</th>
                          <th>Id Propinsi</th>
                          <th>Id Kontrasepsi</th>
                          <th>Jumlah Pemakai</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach($pemakaikontrasepsi as $p) { ?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $p->Id_List ?></td>
                          <td><?php echo $p->Id_Propinsi ?></td>
                          <td><?php echo $p->Id_Kontrasepsi ?></td>
                          <td><?php echo $p->Jumlah_Pemakai ?></td>
                         <!--  <td>
                            <a href="#" data-toggle="modal" data-target=".edit<?php echo $no ?>" style="color: #3B3C3C;"><p class="fa fa-edit"></p></a>&nbsp;&nbsp;
                            <a href="<?php echo base_url() ?>Dashboard/hapusUser/<?php echo $e['id'] ?>" style="color: #3B3C3C;" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini ?')"><p class="fa fa-trash"></p></a></td> -->
                        </tr>
                        <?php $no++; } ?>
                      </tbody>
                    </table>
                    <div class="clearfix" style="padding-bottom: 20px"></div>
</div>

<div class="modal fade bs-example-modal-lg add" tabindex="-1" role="dialog" aria-hidden="true">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url() ?>Dashboard/tambahPemakai" method="POST" enctype="multipart/form-data">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">Tambah Data Pemakai Kontrasepsi</h4>
                              </div>
                              <div class="modal-body">
                                <!-- <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Id_Propinsi">Id List 
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="Id_Propinsi" name="Id_Propinsi" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div> -->
                                <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nama_Propinsi">Propinsi
                                  </label>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select name="Id_Propinsi" id="Id_Propinsi">
                                    <option> - Pilih Propinsi -</option>                            
                                    <?php
                                    foreach($propinsi as $p) {
                                    echo "<option value='".$p->Id_Propinsi."'>".$p->Nama_Propinsi."</option>";
                                    }
                                    ?>
                                  </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Nama_Kontrasepsi">Kontrasepsi
                                  </label>
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select name="Id_Kontrasepsi" id="Id_Kontrasepsi">
                                    <option> - Pilih Kontrasepsi -</option>                            
                                    <?php
                                    foreach($kontrasepsi as $k) {
                                    echo "<option value='".$k->Id_Kontrasepsi."'>".$k->Nama_Kontrasepsi."</option>";
                                    }
                                    ?>
                                  </select>
                                  </div>
                                </div>                                                                
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Jumlah_Pemakai">Jumlah Pemakai
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="Jumlah_Pemakai" name="Jumlah_Pemakai" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                              </div>
                            </div>
                          </div>
                          </form>
                        </div>
<script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript">
      $('#datatable').dataTable( {
        "dom": 'lrtip',
      } );
      oTable = $('#datatable').dataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
      $('#search').keyup(function(){
            oTable.fnFilter($(this).val()).draw() ;
      });
    </script> 