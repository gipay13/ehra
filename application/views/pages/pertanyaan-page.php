<div class="container my-5">
    <div class="col-md-12">
        <div class="card mt-2">
            <div id="" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th class="col-md-5 font-weight-bold">Kuesioner</th>
                                <th class="col-md-1 font-weight-bold"></th>
                                <th class="col-md-6 font-weight-bold">Jawaban</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <form action="/pertanyaan/b/store" method="POST">
            <?php foreach ($kategori as $k) { ?>
                <div class="card mt-2">
                    <div class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <table class="table table-sm">
                                <tbody>
                                    <tr>
                                        <td class="col-md-5"><?= $k->pertanyaan ?></td>
                                        <td class="col-md-1"></td>
                                        <td class="col-md-5"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </form>
    </div>
</div>