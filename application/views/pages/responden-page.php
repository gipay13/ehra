<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="<?= base_url('responden/store'); ?>" method="post">
                <div class="card">
                    <div class="my-3 mx-4">

                        <div class="form-group">
                            <label for="provinsi">Provinsi</label>
                            <select name="provinsi" id="provinsi" class="form-control">
                                <option value="">--Pilih Provinsi--</option>
                                <?php
                                foreach ($provinces as $p) {
                                    echo '<option value="' . $p->id . '">' . $p->name . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kabupaten">Kabupaten/Kota</label>
                            <select name="kabupaten" id="kabupaten" class="form-control">
                                <option value="">--Pilih Kabupaten--</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select name="kecamatan" id="kecamatan" class="form-control">
                                <option value="">--Pilih Kecamatan--</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kelurahan">Desa/Kelurahan</label>
                            <select name="kelurahan" id="kelurahan" class="form-control">
                                <option value="">--Pilih Kelurahan--</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="strata">Strata Desa/Kelurahan</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="0" name="strata" class="custom-control-input" value="0">
                                <label class="custom-control-label" for="0">0</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="1" name="strata" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="1">1</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="2" name="strata" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="2">2</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="3" name="strata" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="3">3</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="4" name="strata" class="custom-control-input" value="4">
                                <label class="custom-control-label" for="4">4</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card my-5">
                    <div class="my-3 mx-4">
                        <div class="form-group">
                            <label for="tanggalSurvey">Tanggal Survey</label>
                            <input type="date" class="form-control" name="tanggalSurvey" id="tanggalSurvey">
                        </div>
                        <div class="form-group">
                            <label for="waktu">Jam Wawancara</label>
                            <input type="time" name="waktu" id="waktu" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nama Pewawancara/Enumerator</label>
                            <input type="hidden" name="pewawancara" id="pewawancara" value="<?= $this->session->userdata("id"); ?>">
                            <input type="text" name="pewawancara2" id="pewawancara2" class="form-control" value="<?= $this->session->userdata("name"); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="supervisor">Nama Supervisor</label>
                            <select name="supervisor" id="supervisor" class="form-control">
                                <option value="">--Pilih Supervisor--</option>
                                <?php
                                foreach ($supervisor as $s) {
                                    echo '<option value="' . $s->id . '">' . $s->nama_supervisor . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="koordinator">Koordinator Kecamatan</label>
                            <select name="koordinator" id="koordinator" class="form-control">
                                <option value="">--Pilih Koordinator--</option>
                                <?php foreach ($koordinator->result_array() as $k) { ?>
                                    <option value="<?= $k['id'] ?>"><?= $k['nama_koordinator'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nikkepalaRumah">NIK Kepala Rumah Tangga</label>
                            <input type="number" class="form-control" name="nikKepalaRumah" id="nikkepalaRumah">
                        </div>
                        <div class="form-group">
                            <label for="namakepalaRumah">Nama Kepala Rumah Tangga</label>
                            <input type="text" class="form-control" name="namaKepalaRumah" id="namakepalaRumah" autocomplete="off">
                        </div>
                        <div class="form-group">Jumlah Keluarga Dalam Rumah</label>
                            <input type="number" class="form-control" name="jumlahKeluarga" id="kepalaRumah">
                        </div>
                        <div class="form-group">
                            <label for="jumlahJiwa">Jumlah Jiwa dalam Rumah</label>
                            <div class="row">
                                <div class="col-md-3">Laki</div>
                                <input type="number" class="form-control col-md-4" name="jumlahJiwaLaki" id="jumlahJiwa">
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">Perempuan</div>
                                <input type="number" class="form-control col-md-4" name="jumlahJiwaPr" id="jumlahJiwa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="responden">Nama Responden</label>
                            <input type="text" class="form-control" name="responden" id="responden" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="hubungan">Hubungan Responden dengan Kepala Keluarga</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="istri" name="hubungan" class="custom-control-input" value="1">
                                <label class="custom-control-label" for="istri">Istri</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="anakPr" name="hubungan" class="custom-control-input" value="2">
                                <label class="custom-control-label" for="anakPr">Anak perempuan yang sudah menikah</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="kepala" name="hubungan" class="custom-control-input" value="3">
                                <label class="custom-control-label" for="kepala">Kepala keluarga</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat/Telepon</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" autocomplete="off">
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSm">
                    Next
                </button>

                <!-- Central Modal large -->
                <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title w-100 text-center" id="myModalLabel"><b>PERNYATAAN KESEDIAAN</b></h4>
                            </div>
                            <div class="modal-body">
                                <p class="text-center">(WAJIB DIBACAKAN PADA CALON RESPONDEN; BOLEH MENGGUNAKAN BAHASA DAERAH SETEMPAT)</p>
                                <p class="text-center">Selamat pagi/siang/sore Ibu, saya <?= $this->session->userdata("name"); ?> mewakili tim survey Penilaian Resiko Kesehatan Lingkungan, Program Percepatan
                                    Pembangunan Sanitasi Permukiman (PPSP) di Kabupaten/Kota _____________. Kami sedang melakukan survei rumah tangga dan
                                    Ibu terpilih untuk diwawancarai. Kami ingin menanyakan dan mengamati hal-hal yang berkaitan dengan lingkungan rumah.
                                    Informasi yang ibu berikan akan membantu pemerintah kab/kota merencanakan program lingkungan. Informasi yang ibu berikan
                                    akan terjaga kerahasiaannya dan tidak akan ditunjukkan pada orang lain. Lama wawancara ini sekitar 30 menit. Wawancara ini
                                    sifatnya sukarela, Ibu boleh menolak atau tidak menjawab pertanyaan tertentu atau tidak melanjutkan wawancara. Kami harap Ibu
                                    bersedia berpartisipasi karena jawaban Ibu sangat penting bagi pembangunan lingkungan. <b>(Jika Calon Responden Tidak
                                        bersedia, ucapkan terima kasih kepada calon responden tersebut dan selanjutnya anda pindah ke calon responden lain yang ada
                                        dalam daftar calon responden)</b></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>