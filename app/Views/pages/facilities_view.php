<!-- ======= Main ======= -->
<main id="main">
    <section class="inner-page bg-white">
        <div class="container-fluid">
            <section id="portfolio" class="portfolio section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-gym">Gym</li>
                                <li data-filter=".filter-laboratory">Laboratory</li>
                                <li data-filter=".filter-library">Library</li>
                                <li data-filter=".filter-school_building">School Building</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                        <?php
                        $images = [];

                        for ($gym = 1; $gym <= 8; $gym++) {
                            $images[] = [
                                'src' => base_url() . 'public/img/facilities/gym/img_' . $gym . '.jpg',
                                'title' => 'Gym Image ' . $gym,
                                'category' => 'gym',
                                'alt' => 'Gym Image ' . $gym
                            ];
                        }

                        for ($laboratory = 1; $laboratory <= 9; $laboratory++) {
                            $images[] = [
                                'src' => base_url() . 'public/img/facilities/laboratory/img_' . $laboratory . '.jpg',
                                'title' => 'Laboratory Image ' . $laboratory,
                                'category' => 'laboratory',
                                'alt' => 'Laboratory Image ' . $laboratory
                            ];
                        }

                        for ($library = 1; $library <= 18; $library++) {
                            $images[] = [
                                'src' => base_url() . 'public/img/facilities/library/img_' . $library . '.jpg',
                                'title' => 'Library Image ' . $library,
                                'category' => 'library',
                                'alt' => 'Library Image ' . $library
                            ];
                        }

                        for ($school_building = 1; $school_building <= 3; $school_building++) {
                            $images[] = [
                                'src' => base_url() . 'public/img/facilities/school_building/img_' . $school_building . '.jpg',
                                'title' => 'School Building Image ' . $school_building,
                                'category' => 'school_building',
                                'alt' => 'School Building Image ' . $school_building
                            ];
                        }

                        shuffle($images);

                        foreach ($images as $image) : ?>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $image['category'] ?>">
                                <div class="portfolio-wrap">
                                    <img src="<?= $image['src'] ?>" class="img-fluid" alt="<?= $image['alt'] ?>">

                                    <div class="portfolio-info">
                                        <h4><?= $image['title'] ?></h4>
                                        <p><?= ucfirst($image['category']) ?></p>
                                    </div>
                                    
                                    <div class="portfolio-links">
                                        <a href="<?= $image['src'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $image['title'] ?>"><i class="bx bx-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>
    </section>
</main>