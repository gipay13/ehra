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
                            <label for="koordinator">Koordinator Kecamatan</label>
                            <select name="koordinator" id="koordinator" class="form-control">
                                <option value="">--Pilih Koordinator--</option>
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
                            <label for="pewawancara">Nama Pewawancara/Enumerator</label>
                            <input type="text" name="pewawancara" id="pewawancara" class="form-control" value="<?= $this->session->userdata("name"); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="supervisor">Nama Supervisor</label>
                            <select name="supervisor" id="supervisor" class="form-control">
                                <?php
                                foreach ($supervisor as $s) {
                                    echo '<option value="' . $s->id . '">' . $s->nama_supervisor . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kepalaRumah">Nama Kepala Rumah Tangga</label>
                            <input type="text" class="form-control" name="kepalaRumah" id="kepalaRumah">
                        </div>
                        <div class="form-group">
                            <label for="jumlahJiwa">Jumlah Jiwa dalam Rumah</label>
                            <div class="row">
                                <div class="col-md-3">Laki</div>
                                <input type="text" class="form-control col-md-4" name="jumlahJiwaLaki" id="jumlahJiwa">
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-3">Perempuan</div>
                                <input type="text" class="form-control col-md-4" name="jumlahJiwaPr" id="jumlahJiwa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="responden">Nama Responden</label>
                            <input type="text" class="form-control" name="responden" id="responden">
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
                            <input type="text" class="form-control" name="alamat" id="alamat">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>