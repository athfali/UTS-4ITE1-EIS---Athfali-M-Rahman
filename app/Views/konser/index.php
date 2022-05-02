<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="w3-container w3-black w3-center">
    <h2 class="w3-wide w3-center">Selamat datang <?= session('name') ?></h2>
    <table class="w3-content w3-center table table-light table-hover table-borderless">
        <?php $no = 0; ?>
        <?php foreach ($konsers as $item) : ?>
        <tr>
            <th>
                <H4><?= $item['pembuat'] ?></H4>
            </th>
        </tr>
        <tr>
            <td>
                <div class="col-12 text-center ">
                    <img src="/photos/<?= $item['photo'] ?>" alt="" width=750 height=450>
                </div>
                <div class="col-12 text-left">
                    <div>
                        <h3>$<?= $item['harga'] ?></h3>
                    </div>
                    <div>
                        <h6>Stock <?= $item['stok'] ?></h6>
                    </div>
                    <div class="w3-center">
                        <div><?= $item['deskripsi'] ?></div>
                    </div>
                    <div>
                        <div class="w3-left">
                            <form action="/konser" method="post">
                                <input type="hidden" name="_method" value="put" />
                                <input type="hidden" name="oldphoto" />
                                <div class="form-group">
                                    <label for="example-konser-komentar">
                                        <h3>Komentar:</h3>
                                    </label>
                                    <div><?= $item['komentar'] ?></div>
                                    <br>
                                    <input type="text" class="form-control" id="example-konser-komentar"
                                        aria-describedby="emailHelp" placeholder="Enter product name" required
                                        name="komentar" name="komentar">
                                </div>
                                <button type="submit" class="btn btn-secondary text-white "><i
                                        class='fa fa-commenting-o'></i></button>
                                <form></i></a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-secondary text-dark" type="submit">
                                        <i class='bx bx-trash'></i>
                                    </button>

                                </form>
                            </form>
                        </div>
                    </div>
                </div>
</div>
</tr>
<td>
    <div class="btn-group " role="group " aria-label="Basic example ">
        <form action="/konser/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
            <a href="/konser/<?= $item['id'] ?>/edit" class="btn btn-secondary text-white "><i
                    class='bx bx-pencil'></i></a>
            <a href="/konser/komentar" class="btn btn-secondary text-white "><i class='fa fa-commenting-o'></i></a>
            <input type="hidden" name="_method" value="DELETE" />
            <button class="btn btn-secondary text-dark" type="submit">
                <i class='bx bx-trash'></i>
            </button>
        </form>

    </div>
    <?php endforeach ?>


</td>
<br>

</table>
</div>
</div>
<br>

<div class="w3-container w3-center">
    <div class="w3-wide w3-center">
        <?= $pager->links('konsers', 'custom_pagination') ?>
    </div>
</div>

<div class="w3-wide w3-center">
    <a href="/konser/new">
        <div class="w3-button w3-block w3-round-xxlarge w3-black">
            Create your Post here
        </div>
    </a>
</div>

<div class="w3-container w3-content w3-center w3-padding-64 mt-12 mb-12" style="max-width:800px" id="band">
    <h2 class="w3-wide">Saran dan Upload</h2>
    <p class="w3-opacity"><i>kembangkanlah keahlian designmu</i></p>
    <p class="w3-justify">We will be entering the world championship for mobile legends,
        apex, and valorant then witness our power within the game and you will bear witness
        to our victories. So be present and witness our matches on stage or online on your
        individual stumble platforms and do not forget to always support and buy our merchandise,
        see you as champions</p>
</div>

<!-- End Page Content -->
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">

</div>
</div>
<?= $this->endSection() ?>