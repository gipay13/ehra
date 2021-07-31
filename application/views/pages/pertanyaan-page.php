<div class="container my-5">
        <div class="col-md-12">
            <form action="/pertanyaan/b/store" method="POST">
                <button class="btn btn-primary" type="submit">Submit</button>

                <div id="accordion">
					<?php foreach ($kategori as $k) { ?>
							<div class="card mt-2">
								<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse" data-target="#<?= $k->kode_kategori ?>'" aria-expanded="true" aria-controls="<?= $k->kode_kategori ?>">
										<?= $k->kode_kategori ?>. <?= $k->nama_kategori ?>
									</button>
								</h5>
								</div>
		
								<div id="<?= $k->kode_kategori ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									<table class="table table-sm">
										<thead>
											<tr>
											<th class="col-md-5 font-weight-bold">Kuesioner</th>
											<th class="col-md-1 font-weight-bold"></th>
											<th class="col-md-6 font-weight-bold">Jawaban</th>
											</tr>
										</thead>
											<tbody>
                                                <tr>
                                                    <td class="col-md-5"><?= $k->pertanyaan ?></td>
                                                    <td class="col-md-1"></td>
                                                    <td class="col-md-5"></td>
                                                </tr>
                                                <!-- <?php foreach ($k->pertanyaan as $p) { ?>
                                                    <tr>
                                                        <td class="col-md-5"><?= $p ?></td>
                                                        <td class="col-md-1"></td>
                                                        <td class="col-md-6"></td>
                                                    </tr>
                                                <?php } ?>  -->
											</tbody>
										</table>
								</div>
								</div>
							</div>
					<?php } ?>
                    <!-- <div class="card mt-2">

                        <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#{{$categories->kode_kategori}}" aria-expanded="true" aria-controls="{{$categories->kode_kategori}}">
                                {{$categories->kode_kategori}}. {{$categories->nama_kategori}}
                            </button>
                        </h5>
                        </div>

                        <div id="{{$categories->kode_kategori}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                    <th class="col-md-5 font-weight-bold">Kuesioner</th>
                                    <th class="col-md-1 font-weight-bold"></th>
                                    <th class="col-md-6 font-weight-bold">Jawaban</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach ($categories->grupPertanyaan as $question)
                                        <tr>
                                            <td class="col-md-5">{{$question->pertanyaan->pertanyaan}}</td>
                                            <td class="col-md-1"></td>
                                            <td class="col-md-5"></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                        </div>

                    </div> -->

                </div>
            </form>
        </div>
    </div>
