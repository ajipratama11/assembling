<?php $this->load->view('templates/head'); ?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->

    <?php $this->load->view('templates/navbar'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php $this->load->view('templates/asside'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Cek Kelengkapan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Laporan</a></li>
                <li class="breadcrumb-item active">Cek Kelengkapan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form Cek Kelengkapan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="<?= base_url('Laporan/tambah_cek_kelengkapan') ?>" enctype="multipart/form-data" method="post">
                  <div class="card-body col-md-12">
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">No. RM</label>
                      <div class="input-group mb-3">
                        <input type="text" name="no_rekdis" value="<?= $cekkel->no_rekdis ?>" placeholder="Nomor Rekam Medis" readonly class="form-control">
                        <div class="input-group-append">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">Nama Pasien</label>
                      <input type="text" name="nama_pasien" value="<?= $cekkel->nama_pasien ?>" class="form-control" placeholder="Nama Pasien">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">Jenis Pelayanan</label>
                      <select class="form-control" name="jenis_pelayanan">
                        <option>--- Pilih Jenis Pelayanan ---</option>
                        <option value="Rawat Inap">Rawat Inap</option>
                        <option value="Rawat Jalan">Rawat Jalan</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">Asal Ruangan</label>
                      <select class="form-control" name="asal_ruangan">
                        <option>--- Pilih Asal Ruangan ---</option>
                        <option value="Rawat Inap">Ruang Rawat Inap</option>
                        <option value="Rawat Jalan">Ruang Rawat Jalan</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">Tanggal Cek</label>
                      <input type="date" name="tgl_cek" class="form-control">
                      <input type="hidden" name="nama_form" value="Form Kelengkapan" class="form-control">
                      <input type="hidden" name="status_2" value="Terbaca" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="exampleInputEmail1">Catatan</label>
                      <textarea type="text" name="catatan" class="form-control" placeholder="Catatan"></textarea>
                    </div>

                  </div>

                  <div class="card-body">
                    <table class="table">
                      <thead>

                        <td>Form</td>
                        <td>Lengkap</td>
                        <td>Tidak Lengkap</td>

                      </thead>
                      <tbody>
                        <tr>
                          <td>SBAR</td>
                          <td> <input type="radio" value="lengkap" id="radio1" name="sbar" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio2" name="sbar" /></td>

                        </tr>
                        <tr>
                          <td>CARD X</td>
                          <td> <input type="radio" value="lengkap" id="radio3" name="card_x" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio4" name="card_x" /></td>
                        </tr>
                        <tr>
                          <td>PEMANTAUAN</td>
                          <td> <input type="radio" value="lengkap" id="radio5" name="pemantauan" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio6" name="pemantauan" /></td>

                        </tr>
                        <tr>
                          <td>INFORM CONSENT</td>
                          <td> <input type="radio" value="lengkap" id="radio7" name="inform_consent" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio8" name="inform_consent" /></td>

                        </tr>
                        <tr>
                          <td>SKRINING</td>
                          <td> <input type="radio" value="lengkap" id="radio9" name="skrining" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio10" name="skrining" /></td>

                        </tr>
                        <tr>
                          <td>PENGKAJIAN KADAR</td>
                          <td> <input type="radio" value="lengkap" id="radio11" name="pengkajian_kadar" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio12" name="pengkajian_kadar" /></td>
                        </tr>
                        <tr>
                          <td>ASSESMEN AWAL</td>
                          <td> <input type="radio" value="lengkap" id="radio13" name="assesmen_awal" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio14" name="assesmen_awal" /></td>
                        </tr>
                        <tr>
                          <td>TRANSFER RUANGAN</td>
                          <td> <input type="radio" value="lengkap" id="radio15" name="transfer_ruangan" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio16" name="transfer_ruangan" /></td>
                        </tr>
                        <tr>
                          <td>RESUME</td>
                          <td> <input type="radio" value="lengkap" id="radio17" name="resume" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio18" name="resume" /></td>
                        </tr>
                        <tr>
                          <td>RINGKASAN M K</td>
                          <td> <input type="radio" value="lengkap" id="radio19" name="ringkasan_mk" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio20" name="ringkasan_mk" /></td>
                        </tr>
                        <tr>
                          <td>ASSESMEN DPJP</td>
                          <td> <input type="radio" value="lengkap" id="radio21" name="assesmen_dpjp" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio22" name="assesmen_dpjp" /></td>
                        </tr>
                        <tr>
                          <td>PENGKAJIAN BAYI BARU LAHIR</td>
                          <td> <input type="radio" value="lengkap" id="radio23" name="pengkajian_bayi" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio24" name="pengkajian_bayi" /></td>
                        </tr>
                        <tr>
                          <td>PENGKAJIAN PERAWAT/BIDAN</td>
                          <td> <input type="radio" value="lengkap" id="radio25" name="pengkajian_perawat" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio26" name="pengkajian_perawat" /></td>
                        </tr>
                        <tr>
                          <td>ASUHAN GIZI</td>
                          <td> <input type="radio" value="lengkap" id="radio27" name="asuhan_gizi" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio28" name="asuhan_gizi" /></td>
                        </tr>
                        <tr>
                          <td>PERENCANAAN PASIEN PULANG</td>
                          <td> <input type="radio" value="lengkap" id="radio29" name="perencanaan_pasien_pulang" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio30" name="perencanaan_pasien_pulang" /></td>
                        </tr>
                        <tr>
                          <td>OBS TANDA VITAL</td>
                          <td> <input type="radio" value="lengkap" id="radio31" name="obs_tanda_vital" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio32" name="obs_tanda_vital" /></td>
                        </tr>
                        <tr>
                          <td>OBS SUHU NADI</td>
                          <td> <input type="radio" value="lengkap" id="radio33" name="obs_suhu_nadi" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio34" name="obs_suhu_nadi" /></td>
                        </tr>
                        <tr>
                          <td>LAPORAN OPERASI</td>
                          <td> <input type="radio" value="lengkap" id="radio35" name="laporan_operasi" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio36" name="laporan_operasi" /></td>
                        </tr>
                        <tr>
                          <td>ASSESMEN PRA BEDAH</td>
                          <td> <input type="radio" value="lengkap" id="radio37" name="assesmen_prabedah" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio38" name="assesmen_prabedah" /></td>
                        </tr>
                        <tr>
                          <td>ASSESMEN PRA ANASTESI</td>
                          <td> <input type="radio" value="lengkap" id="radio39" name="assesmen_praanastesi" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio40" name="assesmen_praanastesi" /></td>
                        </tr>
                        <tr>
                          <td>ASSESMEN KEPERAWATAN OK</td>
                          <td> <input type="radio" value="lengkap" id="radio41" name="assesmen_keperawatan" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio42" name="assesmen_keperawatan" /></td>
                        </tr>
                        <tr>
                          <td>TIMBANG TERIMA PRA-OP</td>
                          <td> <input type="radio" value="lengkap" id="radio43" name="timbang_terima" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio44" name="timbang_terima" /></td>
                        </tr>
                        <tr>
                          <td>SET MARKING</td>
                          <td> <input type="radio" value="lengkap" id="radio45" name="set_marking" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio46" name="set_marking" /></td>
                        </tr>
                        <tr>
                          <td>CEKLIST KESELAMATAN OP</td>
                          <td> <input type="radio" value="lengkap" id="radio47" name="ceklist_keselamatan" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio48" name="ceklist_keselamatan" /></td>
                        </tr>
                        <tr>
                          <td>PPI</td>
                          <td> <input type="radio" value="lengkap" id="radio49" name="ppi" />
                          </td>
                          <td> <input type="radio" value="tidak lengkap" id="radio50" name="ppi" /></td>
                        </tr>

                    </table>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <input type="submit" id="simpansementara" name="Simpan_Sementara" class="btn btn-primary" value="Simpan_Sementara"></input>

                    <input type="submit" disabled id="simpan" name="Simpan" class="btn btn-primary" value="Simpan"></input>
                  </div>
                </form>
              </div>

            </div>
            <!--/.col (left) -->
            <!-- right column -->

            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view('templates/footer') ?>
</body>

</html>
<script type="text/javascript">
  // Make this a function.
  $('input:radio[name="sbar"]').change(
    function() {
      if (this.value == 'lengkap') {
        $('input:radio[name="card_x"]').change(
          function() {
            if (this.value == 'lengkap') {
              $('input:radio[name="pemantauan"]').change(
                function() {
                  if (this.value == 'lengkap') {
                    $('input:radio[name="inform_consent"]').change(
                      function() {
                        if (this.value == 'lengkap') {
                          $('input:radio[name="skrining"]').change(
                            function() {
                              if (this.value == 'lengkap') {
                                $('input:radio[name="pengkajian_kadar"]').change(
                                  function() {
                                    if (this.value == 'lengkap') {
                                      $('input:radio[name="assesmen_awal"]').change(
                                        function() {
                                          if (this.value == 'lengkap') {
                                            $('input:radio[name="transfer_ruangan"]').change(
                                              function() {
                                                if (this.value == 'lengkap') {
                                                  $('input:radio[name="resume"]').change(
                                                    function() {
                                                      if (this.value == 'lengkap') {
                                                        $('input:radio[name="ringkasan_mk"]').change(
                                                          function() {
                                                            if (this.value == 'lengkap') {
                                                              $('input:radio[name="assesmen_dpjp"]').change(
                                                                function() {
                                                                  if (this.value == 'lengkap') {
                                                                    $('input:radio[name="pengkajian_bayi"]').change(
                                                                      function() {
                                                                        if (this.value == 'lengkap') {
                                                                          $('input:radio[name="pengkajian_perawat"]').change(
                                                                            function() {
                                                                              if (this.value == 'lengkap') {
                                                                                $('input:radio[name="asuhan_gizi"]').change(
                                                                                  function() {
                                                                                    if (this.value == 'lengkap') {
                                                                                      $('input:radio[name="perencanaan_pasien_pulang"]').change(
                                                                                        function() {
                                                                                          if (this.value == 'lengkap') {
                                                                                            $('input:radio[name="obs_tanda_vital"]').change(
                                                                                              function() {
                                                                                                if (this.value == 'lengkap') {
                                                                                                  $('input:radio[name="obs_suhu_nadi"]').change(
                                                                                                    function() {
                                                                                                      if (this.value == 'lengkap') {
                                                                                                        $('input:radio[name="laporan_operasi"]').change(
                                                                                                          function() {
                                                                                                            if (this.value == 'lengkap') {
                                                                                                              $('input:radio[name="assesmen_prabedah"]').change(
                                                                                                                function() {
                                                                                                                  if (this.value == 'lengkap') {
                                                                                                                    $('input:radio[name="assesmen_praanastesi"]').change(
                                                                                                                      function() {
                                                                                                                        if (this.value == 'lengkap') {
                                                                                                                          $('input:radio[name="assesmen_keperawatan"]').change(
                                                                                                                            function() {
                                                                                                                              if (this.value == 'lengkap') {
                                                                                                                                $('input:radio[name="timbang_terima"]').change(
                                                                                                                                  function() {
                                                                                                                                    if (this.value == 'lengkap') {
                                                                                                                                      $('input:radio[name="set_marking"]').change(
                                                                                                                                        function() {
                                                                                                                                          if (this.value == 'lengkap') {
                                                                                                                                            $('input:radio[name="ceklist_keselamatan"]').change(
                                                                                                                                              function() {
                                                                                                                                                if (this.value == 'lengkap') {
                                                                                                                                                  $('input:radio[name="ppi"]').change(
                                                                                                                                                    function() {
                                                                                                                                                      if (this.value == 'lengkap') {
                                                                                                                                                        $('#simpansementara').prop('disabled', true);
                                                                                                                                                        $('#simpan').prop('disabled', false);
                                                                                                                                                      } else {
                                                                                                                                                        $('#simpan').prop('disabled', true);
                                                                                                                                                        $('#simpansementara').prop('disabled', false);
                                                                                                                                                      }
                                                                                                                                                    });
                                                                                                                                                } else {
                                                                                                                                                  $('#simpan').prop('disabled', true);
                                                                                                                                                  $('#simpansementara').prop('disabled', false);
                                                                                                                                                }
                                                                                                                                              });
                                                                                                                                          } else {
                                                                                                                                            $('#simpan').prop('disabled', true);
                                                                                                                                            $('#simpansementara').prop('disabled', false);
                                                                                                                                          }
                                                                                                                                        });
                                                                                                                                    } else {
                                                                                                                                      $('#simpan').prop('disabled', true);
                                                                                                                                      $('#simpansementara').prop('disabled', false);
                                                                                                                                    }
                                                                                                                                  });
                                                                                                                              } else {
                                                                                                                                $('#simpan').prop('disabled', true);
                                                                                                                                $('#simpansementara').prop('disabled', false);
                                                                                                                              }
                                                                                                                            });
                                                                                                                        } else {
                                                                                                                          $('#simpan').prop('disabled', true);
                                                                                                                          $('#simpansementara').prop('disabled', false);
                                                                                                                        }
                                                                                                                      });
                                                                                                                  } else {
                                                                                                                    $('#simpan').prop('disabled', true);
                                                                                                                    $('#simpansementara').prop('disabled', false);
                                                                                                                  }
                                                                                                                });
                                                                                                            } else {
                                                                                                              $('#simpan').prop('disabled', true);
                                                                                                              $('#simpansementara').prop('disabled', false);
                                                                                                            }
                                                                                                          });
                                                                                                      } else {
                                                                                                        $('#simpan').prop('disabled', true);
                                                                                                        $('#simpansementara').prop('disabled', false);
                                                                                                      }
                                                                                                    });
                                                                                                } else {
                                                                                                  $('#simpan').prop('disabled', true);
                                                                                                  $('#simpansementara').prop('disabled', false);
                                                                                                }
                                                                                              });
                                                                                          } else {
                                                                                            $('#simpan').prop('disabled', true);
                                                                                            $('#simpansementara').prop('disabled', false);
                                                                                          }
                                                                                        });
                                                                                    } else {
                                                                                      $('#simpan').prop('disabled', true);
                                                                                      $('#simpansementara').prop('disabled', false);
                                                                                    }
                                                                                  });
                                                                              } else {
                                                                                $('#simpan').prop('disabled', true);
                                                                                $('#simpansementara').prop('disabled', false);
                                                                              }
                                                                            });
                                                                        } else {
                                                                          $('#simpan').prop('disabled', true);
                                                                          $('#simpansementara').prop('disabled', false);
                                                                        }
                                                                      });
                                                                  } else {
                                                                    $('#simpan').prop('disabled', true);
                                                                    $('#simpansementara').prop('disabled', false);
                                                                  }
                                                                });
                                                            } else {
                                                              $('#simpan').prop('disabled', true);
                                                              $('#simpansementara').prop('disabled', false);
                                                            }
                                                          });
                                                      } else {
                                                        $('#simpan').prop('disabled', true);
                                                        $('#simpansementara').prop('disabled', false);
                                                      }
                                                    });
                                                } else {
                                                  $('#simpan').prop('disabled', true);
                                                  $('#simpansementara').prop('disabled', false);
                                                }
                                              });
                                          } else {
                                            $('#simpan').prop('disabled', true);
                                            $('#simpansementara').prop('disabled', false);
                                          }
                                        });
                                    } else {
                                      $('#simpan').prop('disabled', true);
                                      $('#simpansementara').prop('disabled', false);
                                    }
                                  });
                              } else {
                                $('#simpan').prop('disabled', true);
                                $('#simpansementara').prop('disabled', false);
                              }
                            });
                        } else {
                          $('#simpan').prop('disabled', true);
                          $('#simpansementara').prop('disabled', false);
                        }
                      });
                  } else {
                    $('#simpan').prop('disabled', true);
                    $('#simpansementara').prop('disabled', false);
                  }
                });
            } else {
              $('#simpan').prop('disabled', true);
              $('#simpansementara').prop('disabled', false);
            }
          });
      } else {
        $('#simpan').prop('disabled', true);
        $('#simpansementara').prop('disabled', false);
      }
    });
</script>