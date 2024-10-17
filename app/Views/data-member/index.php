<?= $this->extend('layout/app'); ?>
<?= $this->section('content'); ?>

<style>
    .card {
        transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .card:hover {
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
    }
</style>

<!-- Section Member -->
<section class="member-section">
    <div class="container">
        <h2>Daftar Member</h2>
        <?php if (empty($member)): ?>
            <div class="col-12">
                <div class="alert alert-info text-center" role="alert">
                    Masih belum ada Data Member
                </div>
            </div>
        <?php else: ?>
            <div class="row mt-3">
                <!-- Card -->
                <?php foreach ($member as $item): ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <a href="<?= base_url('detail-member/' . $item['slug']); ?>" class="text-decoration-none" style="color: inherit;">
                            <div class="card h-100 shadow-sm"
                                style="cursor: pointer; border-radius: 12px; transition: box-shadow 0.3s ease, transform 0.3s ease;">
                                <img src="<?= base_url('img/' . $item['foto_profil']); ?>" class="card-img-top" alt="Sample Member 1"
                                    style="height: 220px; object-fit: cover; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title text-center" style="margin-bottom: 12px; font-weight: bold; word-wrap: break-word; white-space: normal;">
                                        <?= $item['username'] ?>
                                    </h6>
                                    <p class="card-text text-center text-muted" style="flex-grow: 1; word-wrap: break-word; white-space: normal; font-size: 0.9rem;">
                                        <?= $item['nama_perusahaan'] ?>
                                    </p>
                                    <span class="btn btn-primary mt-auto" style="border-radius: 8px;">Lihat Profil</span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="mt-2">
                <?= $pager->links('default', 'bootstrap_pagination') ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection(); ?>